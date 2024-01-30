<?php

namespace App\Http\Controllers;

use App\Models\Resenas;
use Illuminate\Http\Request;

/**
 * Class ResenaController
 * @package App\Http\Controllers
 */
class ResenaController extends Controller
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
        $resenas = Resenas::all();

        return view('resena.index', compact('resenas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resena = new Resenas();
        return view('resena.create', compact('resena'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Resenas::$rules);

        $resena = Resenas::create($request->all());

        return redirect()->route('resenas.index')
            ->with('success', 'Reseña creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resena = Resenas::find($id);

        return view('resena.show', compact('resena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resena = Resenas::find($id);

        return view('resena.edit', compact('resena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Resena $resena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resenas $resena)
    {
        request()->validate(Resenas::$rules);

        $resena->update($request->all());

        return redirect()->route('resenas.index')
            ->with('success', 'Resena updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $resena = Resenas::find($id)->delete();

        return redirect()->route('resenas.index')
            ->with('success', 'Resena deleted successfully');
    }

    public function habilitar($id)
    {
        $resena = Resenas::find($id);
        $resena->habilitado = 1;
        $resena->save();

        $resenas = Resenas::all();

        return view('resena.index', compact('resenas'));
    }

    public function deshabilitar($id)
    {
        $resena = Resenas::find($id);
        $resena->habilitado = 0;
        $resena->save();

        $resenas = Resenas::all();

        return view('resena.index', compact('resenas'));
    }
}
