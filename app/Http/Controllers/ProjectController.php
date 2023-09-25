<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Img;
use App\Models\Norma;
use App\Models\Precio;
use App\Models\Servicio;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProjectController extends Controller
{
    // En esta clase vamos ha usar como controlador para enviar la
    // informaicón de la tambla Imgs ha la vista
    
    public function index()
    {
        $imgs = Img::paginate();
        $normas = Norma::paginate();
        $servicios = Servicio::paginate();
        
        // Generar JSON para tener las reservas del calendario
        $json = "[";
        $fechas = Reserva::paginate();
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
        
        $precios = Precio::paginate();
        foreach($precios as $precio)
        {
            $fechaDia = new Carbon($precio->fecha);

            $fechaFin->addDays(1);

            $json .= "{ title: '" . $precio->precio . "€', " .
                "date: '" . $fechaDia->format('Y-m-d') . "'," .
                "color: 'blue' },"
                ;
            
        }

        $json .= "]";

        return view('welcome', compact('imgs', 'normas', 'servicios', 'json'));
    }
}
