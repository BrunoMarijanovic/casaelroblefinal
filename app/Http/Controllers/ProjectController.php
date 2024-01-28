<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Img;
use App\Models\Norma;
use App\Models\Precio;
use App\Models\Servicio;
use App\Models\Reserva;
use App\Models\Diasminimo;
use App\Models\Resenas;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Mail\EmailResena;
use Illuminate\Support\Facades\Mail;

class ProjectController extends Controller
{
    // En esta clase vamos ha usar como controlador para enviar la
    // informaicón de la tambla Imgs ha la vista
    
    public function index()
    {
        $imgs = Img::all();
        $normas = Norma::paginate();
        $servicios = Servicio::paginate();
        $resenas = Resenas::where('habilitado', 1)->get();

        $maximaNotaSobre10 = 0;
        $maximaNotaSobre5 = 0;
        $notaGlobal = 0;
        $notaCalidadPrecio = 0;
        $notaTratoPersonal = 0;
        $notaUbicacion = 0;
        $notaInstalacionSevicios = 0;
        $notaLimpieza = 0;
        foreach($resenas as $resena)
        {
            $notaGlobal += $resena->notaFinal; // Sobre 10

            // Sobre 5
            $notaCalidadPrecio += $resena->calidadPrecio;
            $notaTratoPersonal += $resena->tratoPersonal;
            $notaUbicacion += $resena->ubicacion;
            $notaInstalacionSevicios += $resena->instalacionServicios;
            $notaLimpieza += $resena->limpieza;

            $maximaNotaSobre10 += 10;
            $maximaNotaSobre5 += 5;
        }

        $notaGlobal = round(($notaGlobal / $maximaNotaSobre10) * 10, 1);

        $notaCalidadPrecio = round(($notaCalidadPrecio / $maximaNotaSobre5) * 10, 1);
        $notaTratoPersonal = round(($notaTratoPersonal / $maximaNotaSobre5) * 10, 1);
        $notaUbicacion = round(($notaUbicacion / $maximaNotaSobre5) * 10, 1);
        $notaInstalacionSevicios = round(($notaInstalacionSevicios / $maximaNotaSobre5) * 10, 1);
        $notaLimpieza = round(($notaLimpieza / $maximaNotaSobre5) * 10, 1);

        
        // Generar JSON para tener las reservas del calendario
        $json = "[";
        $fechas = Reserva::all();
        foreach($fechas as $fecha)
        {
            $fechaInicio = new Carbon($fecha->fechaInicio);
            $fechaFin = new Carbon($fecha->fechaFin);

            $fechaFin->addDays(1);

            $json .= "{ title: 'Fecha Reservada', " .
                "start: '" . $fechaInicio->format('Y-m-d') . "'," . 
                "end: '" . $fechaFin->format('Y-m-d') . "'," . 
                "color: 'red' },"
                ;
            
        }
        
        $precios = Precio::all();
        foreach($precios as $precio)
        {
            $fechaDia = new Carbon($precio->fecha);

            $json .= "{ title: '" . $precio->precio . "€', " .
                "date: '" . $fechaDia->format('Y-m-d') . "'," .
                "color: 'blue' },"
                ;
            
        }
        
        
        $diasminimo = Diasminimo::all();
        foreach($diasminimo as $dia)
        {
            $fechaDia = new Carbon($dia->fecha);

            $json .= "{ title: '" . $dia->minimodias . " nights minim', " .
                "date: '" . $fechaDia->format('Y-m-d') . "'," .
                "color: 'green' },"
                ;
            
        }

        $json .= "]";

        return view('welcome', compact('imgs', 'normas', 'servicios', 'json', 'resenas',
            'notaGlobal', 'notaCalidadPrecio', 'notaTratoPersonal', 'notaUbicacion',
            'notaInstalacionSevicios', 'notaLimpieza'));
    }
    
    public function formReview()
    {
        return view('reviews.form');
    }

    public function sendReview(Request $request)
    {   

        // Validar el formulario
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'calidadPrecio' => 'required',
            'tratoPersonal' => 'required',
            'ubicacion' => 'required',
            'instalacionesServicios' => 'required',
            'limpieza' => 'required',
        ]);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            // Redireccionar de vuelta con los errores
            return redirect()->back()->withErrors($validator)
                ->with('message', trans('messages.errorRelleneCampos'))->withInput();
        }

        try{
            $resenaDelMismoCliente = Resenas::where('email', $request->email)
                ->where('habilitado', 1)->get();
            
            if ($resenaDelMismoCliente->isNotEmpty())
            {
                return redirect()->back()
                    ->withErrors(trans('messages.reveiwCreatedSameUser'))
                    ->withInput();
            }

            $nota = 0;
            $nuevaResena = new Resenas();
            
            $nuevaResena->nombre = $request->name;
            $nuevaResena->email = $request->email;
            $nuevaResena->calidadPrecio = $request->calidadPrecio;
            $nuevaResena->tratoPersonal = $request->tratoPersonal;
            $nuevaResena->ubicacion = $request->ubicacion;
            $nuevaResena->instalacionServicios = $request->instalacionesServicios;
            $nuevaResena->limpieza = $request->limpieza;

            // Calcular la nota final sobre 10
            $nota += $nuevaResena->calidadPrecio;
            $nota += $nuevaResena->tratoPersonal;
            $nota += $nuevaResena->ubicacion;
            $nota += $nuevaResena->instalacionServicios;
            $nota += $nuevaResena->limpieza;
            $nota = ($nota/25) * 10;
            $nuevaResena->notaFinal = $nota;

            if (is_null($request->comentario))
                $nuevaResena->comentario = '';
            else
                $nuevaResena->comentario = $request->comentario;

            $nuevaResena->habilitado = 0;

            $nuevaResena->save();
            
            // Mandamos un correo al administrador conforme hay una nueva reseña
            // para que la pueda aceptar o rechazar
            Mail::to('brunoandresmarijanovic@gmail.com')->send(new EmailResena($nuevaResena));

        }
        catch (Exception $ex) {
            return redirect()->back()->withErrors($ex->message())->withInput();
        }

        // Creo que en vez de volver al indice debería enviar un mensaje de
        // que la reseña se envió correctamente y que hay que esperar que un administrador
        // acepte nuestra reseña
        return redirect()->back()
            ->with('succes', trans('messages.reveiwCreated'));
    }
}
