<?php

namespace App\Http\Controllers;

use App\Models\Img;
use Illuminate\Http\Request;

/**
 * Class ImgController
 * @package App\Http\Controllers
 */
class ImgController extends Controller
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
        $imgs = Img::paginate();

        return view('img.index', compact('imgs'))
            ->with('i', (request()->input('page', 1) - 1) * $imgs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $img = new Img();
        return view('img.create', compact('img'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Img::$rules);
        
        $filename = '';
        
        // Guardamos la imagen en el proyecto
        if($request->hasFile('imagen'))
        {
            $filename = $request->getSchemeAndHttpHost() . 
                '/public/assets/img/' . 
                time() . 
                '.' . 
                $request->imagen->extension();
                
            $request->imagen->move(public_path('/assets/img'), $filename);
        }
                
        $img = Img::create([
            'imagen' => $filename,
            'tituloES' => $request->tituloES,
            'tituloCAT' => $request->tituloCAT,
            'tituloEN' => $request->tituloEN,
            'tituloFR' => $request->tituloFR,
            'descripcionES' => $request->descripcionES,
            'descripcionCAT' => $request->descripcionCAT,
            'descripcionEN' => $request->descripcionEN,
            'descripcionFR' => $request->descripcionFR,
        ]);

        return redirect()->route('imgs.index')
            ->with('success', 'Img created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $img = Img::find($id);

        return view('img.show', compact('img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $img = Img::find($id);

        return view('img.edit', compact('img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Img $img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Img $img)
    {
        request()->validate(Img::$rules);

        $img->update($request->all());

        return redirect()->route('imgs.index')
            ->with('success', 'Img updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $img = Img::findOrFail($id);

        // Eliminar la img del proyecto
        $imageUrl = $img->imagen;
        $imageUrl = explode('/', $imageUrl);

        $imagePath = public_path('/assets/img/') . $imageUrl[count($imageUrl) - 1];

        // Verifica si el archivo existe y elimínalo
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    
        $img->delete();

        return redirect()->route('imgs.index')
            ->with('success', 'Img deleted successfully');
    }
}
