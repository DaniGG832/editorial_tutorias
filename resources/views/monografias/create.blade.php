<x-monografias>

    <h1>monografias create</h1>

    

    {{-- {{$monografia->anyo}} --}}
    <br>

    <div class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
    
        <a href="{{'/monografias'}}">Volver</a>
    </div>
    
    <br>


    <x-formulario :monografia="$monografia">

        <form action="{{ route('monografias.store', [], false) }}" method="POST"
        enctype="multipart/form-data">
      @csrf
      @method('POST')

    </x-formulario>
  




</x-monografias>
