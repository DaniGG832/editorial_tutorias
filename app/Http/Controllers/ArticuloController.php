<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticuloRequest;
use App\Http\Requests\UpdateArticuloRequest;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('articulos.index', [
            'articulos' => Articulo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $articulo = new Articulo();

        //dd($articulos);

        return view('articulos.create', [
            'articulo' => $articulo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticuloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticuloRequest $request)
    {
        //dd($request);
        $validado = $request->validated();

        $articulo = new Articulo($validado);

        $articulo->save();

        //$articulo->articulos()->sync($request->articulos);
        //dd($articulo);
        return redirect()->route('articulos.index')->with('success', 'Articulo creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {


        return view('articulos.show', ['articulo' => $articulo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        return view('articulos.edit',['articulo'=>$articulo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticuloRequest  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticuloRequest $request, Articulo $articulo)
    {
        $validado = $request->validated();
        $articulo->titulo = $validado['titulo'];
        $articulo->anyo = $validado['anyo'];
        $articulo->num_paginas = $validado['num_paginas'];

        $articulo->save();

        return redirect()->route('articulos.index')->with('success', 'Articulo editado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        $articulo->monografias()->sync([]);
        $articulo->delete();
        return redirect()->route('articulos.index')->with('success', 'articulo borrada correctamente');
    }
}
