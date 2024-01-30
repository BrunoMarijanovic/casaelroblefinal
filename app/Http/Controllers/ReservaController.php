<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Idioma;
use Illuminate\Http\Request;

/**
 * Class ReservaController
 * @package App\Http\Controllers
 */
class ReservaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::paginate();

        return view('reserva.index', compact('reservas'))
            ->with('i', (request()->input('page', 1) - 1) * $reservas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reserva = new Reserva();
        $idiomas = Idioma::pluck('idioma', 'id');

        return view('reserva.create', compact('reserva', 'idiomas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reserva::$rules);
        
        $reserva = new Reserva;

        $reserva->fechaFin = $request->fechaFin;
        $reserva->fechaInicio = $request->fechaInicio;
        $reserva->email = $request->email;
        $reserva->mailEnviado = 0;
        $reserva->idioma = $request->idioma;

        $reserva->save();

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reserva::find($id);

        return view('reserva.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $reserva = Reserva::find($id);
        $idiomas = Idioma::pluck('idioma', 'id');

        return view('reserva.edit', compact('reserva', 'idiomas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        request()->validate(Reserva::$rules);

        $reserva->update($request->all());

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id)->delete();

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva deleted successfully');
    }
}
