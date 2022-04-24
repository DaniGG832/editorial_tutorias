<x-monografias>

    <h1>monografias edit</h1>

    {{$monografia}}
    

    <div class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
    
        <a href="{{'/monografias'}}">Volver</a>
    </div>
    
    <br>

<!-- Aquí puedes escribir tu comentario -->
<!-- Aquí puedes escribir tu comentario -->
{{--  --}}
{{-- <span><?php echo $saludo ?></span> --}} 


{{-- {{$monografia->articulos[0]->titulo}} --}}


    <x-formulario :monografia="$monografia" :articulos="$articulos">
        <form action="{{ route('monografias.update', [$monografia], false) }}" method="POST"
        enctype="multipart/form-data">
      @csrf
      @method('PUT')
       

    </x-formulario>
   
 
</x-monografias>
