


<x-monografias>

    <h1>Articulos create</h1>

   {{--  {{$articulos}} --}}

    {{-- {{$monografia->anyo}} --}}
    <br>

    <div class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
    
        <a href="{{'/articulos'}}">Volver</a>
    </div>
    
    <br>


    <x-formArticulos :articulo="$articulo" >

        <form action="{{ route('articulos.store', [], false) }}" method="POST"
        enctype="multipart/form-data">
      @csrf
      @method('POST')

    </x-formArticulos>
  





</x-monografias>