<x-monografias>

    <h1>Articulos edit</h1>

    {{-- {{$articulos}} --}}

    {{-- {{$monografia->anyo}} --}}
    <br>

    <div
        class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

        <a href="{{ '/articulos' }}">Volver</a>
    </div>

    <br>

    <x-formArticulos :articulo="$articulo" :autores="$autores">

        <form action="{{ route('articulos.update', [$articulo], false) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

    </x-formArticulos>

</x-monografias>
