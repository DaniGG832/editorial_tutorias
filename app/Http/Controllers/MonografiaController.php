<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonografiaRequest;
use App\Http\Requests\UpdateMonografiaRequest;
use App\Models\Articulo;
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
        //$monografias= Monografia::find(1)->articulos[0]->autores;

       // dd($monografias);
        //$x = Monografia::find(1)->articulos->sum('num_paginas');
        //$x = Monografia::withSum('articulos', 'num_paginas')->find(1);
        
        // $x = Monografia::withSum('articulos', 'num_paginas')->get();
        
        
        //dd($x);
        //dd($x->articulos_sum_num_paginas);
  
        $monografias = Monografia::orderBy('anyo','desc')->withSum('articulos', 'num_paginas')->get();
        
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
        $articulos = Articulo::all();

        //dd($articulos);

        return view('monografias.create', [
            'monografia' => $monografia,
            'articulos' => $articulos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMonografiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonografiaRequest $request)
    {

        //dd($request);

        $validado = $request->validated();

        $monografia = new Monografia($validado);

        $monografia->save();

        $monografia->articulos()->sync($request->articulos);

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
        $articulos = Articulo::all();

        return view('monografias.edit', [
            'monografia' => $monografia,
            'articulos' => $articulos,
        ]);
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


        //dd($request->articulos);

        $validado = $request->validated();

         //dd($validado['titulo']);

        $monografia->titulo = $validado['titulo'];
        $monografia->anyo = $validado['anyo'];

        $monografia->save();


        //dd($validado);
        $monografia->articulos()->sync($request->articulos);

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

        //borrar relacion de tabla pivot y borrar monografia 
        $monografia->articulos()->sync([]);
        $monografia->delete();
        return redirect()->route('monografias.index')->with('success', 'Monografia borrada correctamente');


        // dd($monografia->articulos->count()==0);

       //codigo para no poder borrar si tiene articulos relacionados
      /*   if ($monografia->articulos->count() == 0) {
            # code...
            $monografia->delete();
            return redirect()->route('monografias.index')->with('success', 'Monografia borrada correctamente');
        } else {

            return redirect()->route('monografias.index')->with('error', 'no se puede borrar la monografia, tiene articulos asociados ');
        } */
    }

    public function pruebas()
    {


        //$monografias= Monografia::find(1)->with('articulos')->withSum('articulos', 'num_paginas')->get();

        // $monografias= Monografia::withSum('articulos', 'num_paginas')->with('articulos')->get();
        $monografias = Monografia::with('articulos')->withSum('articulos', 'num_paginas')->get();




        return $monografias->find(5)->articulos->sortByDesc('titulo');
    }
}


/* 
metodos pivot

        $monografias=Monografia::find(1)->articulos()->attach([6]);


       $monografias=Monografia::find(1)->articulos()->detach([1,2,7]);


        $monografias=Monografia::find(1)->articulos()->sync([1,3,7]);

       $monografias=Monografia::find(1)->articulos()->syncWithoutDetaching([1,5]);

       dd($monografias);



*/