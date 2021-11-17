<?php

namespace App\Http\Controllers;

use App\Models\Animales;
use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adopcion.anadir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "titulo"=>"required",
            "autor"=>"required",
            "tema"=>"required",
            "unidades"=>"required",
          
        ]);
     
        Animales::create($request->only("titulo","autor","tema","unidades","imagen"));
        return redirect(route("libros.index"))->with("success",__("Libro creado!"));
  
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function show(Animales $animales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function edit(Animales $animales)
    {
        return view("adopcion.edit", ["animales" => $animales]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animales $animales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animales $animales)
    {
        $animales->delete();
        return redirect()->route('');
    }
}
