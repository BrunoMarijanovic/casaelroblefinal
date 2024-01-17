<?php

namespace App\Http\Controllers;

use App\Models\Diasminimo;
use Illuminate\Http\Request;

/**
 * Class DiasminimoController
 * @package App\Http\Controllers
 */
class DiasminimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diasminimos = Diasminimo::all();
            
        return view('diasminimo.index', compact('diasminimos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diasminimo = new Diasminimo();
        return view('diasminimo.create', compact('diasminimo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Diasminimo::$rules);

        $diasminimo = Diasminimo::create($request->all());

        return redirect()->route('diasminimos.index')
            ->with('success', 'Diasminimo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diasminimo = Diasminimo::find($id);

        return view('diasminimo.show', compact('diasminimo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diasminimo = Diasminimo::find($id);

        return view('diasminimo.edit', compact('diasminimo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Diasminimo $diasminimo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diasminimo $diasminimo)
    {
        request()->validate(Diasminimo::$rules);

        $diasminimo->update($request->all());

        return redirect()->route('diasminimos.index')
            ->with('success', 'Diasminimo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $diasminimo = Diasminimo::find($id)->delete();

        return redirect()->route('diasminimos.index')
            ->with('success', 'Diasminimo deleted successfully');
    }
}
