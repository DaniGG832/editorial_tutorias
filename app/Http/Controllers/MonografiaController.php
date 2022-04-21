<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonografiaRequest;
use App\Http\Requests\UpdateMonografiaRequest;
use App\Models\Monografia;

class MonografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$x = Monografia::find(1)->articulos->sum('num_paginas');
        //$x = Monografia::withSum('articulos', 'num_paginas')->find(1);

        // $x = Monografia::withSum('articulos', 'num_paginas')->get();


        //dd($x);
        //dd($x->articulos_sum_num_paginas);


        $monografias = Monografia::orderBy('anyo')->withSum('articulos', 'num_paginas')->get();
        return view('monografias.index', ['monografias' => $monografias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monografia = new Monografia();

        return view('monografias.create', ['monografia' => $monografia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMonografiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonografiaRequest $request)
    {
        $validado = $request->validated();

        $monografia = new Monografia($validado);

        $monografia->save();

        return redirect()->route('monografias.index')->with('success', 'Monografia creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monografia  $monografiamoficica
     */
    public function show(Monografia $monografia)
    {


        //dd($monografia->with('articulos')->withSum('articulos', 'num_paginas')->get());
        //dd($monografia->with('articulos')->get());
        //return $monografia->with('articulos')->withSum('articulos', 'num_paginas')->find($monografia->id);

        return view('monografias.show', ['monografia' => $monografia->with('articulos')->withSum('articulos', 'num_paginas')->find($monografia->id)]);
        //return view('monografias.show',['monografia'=>$monografia->with('articulos')->find($monografia->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Monografia $monografia)
    {
        return view('monografias.edit', ['monografia' => $monografia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMonografiaRequest  $request
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonografiaRequest $request, Monografia $monografia)
    {
        $validado = $request->validated();

        // dd($validado['titulo']);

        $monografia->titulo = $validado['titulo'];
        $monografia->anyo = $validado['anyo'];

        $monografia->save();

        return redirect()->route('monografias.index')->with('success', 'Monografia modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monografia $monografia)
    {

        $monografia->delete();
        return redirect()->route('monografias.index')->with('success', 'Monografia borrada correctamente');
    }

    public function pruebas()
    {

      
        $monografias= Monografia::find(1)->with('articulos')->withSum('articulos', 'num_paginas')->get();

        $monografias= Monografia::withSum('articulos', 'num_paginas')->with('articulos')->get();
        $monografias= Monografia::with('articulos')->withSum('articulos', 'num_paginas')->get();

        return $monografias;
    }
}
