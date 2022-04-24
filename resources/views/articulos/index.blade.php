<x-monografias>

    <div
        class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

        <a href="{{ '/monografias' }}"> volver a monografias</a>
    </div>

    <br>


<h1 class="mb-4 text-2xl font-semibold">Articulos</h1>

        
<table class="table-auto">
    <thead class="bg-blue-300">
        <tr>
            
            <th class="px-6 py-2 ">
                Titulo
            </th>
            <th class="px-6 py-2 ">
                Año
            </th>
            <th class="px-6 py-2 ">
                num_paginas
            </th>
        </tr>
    </thead>
    
    <tbody class="bg-blue-100">
        
        
            
        
        @foreach ($articulos as $articulo)
        <tr>
            
            <td class="px-6 py-2">{{ $articulo->titulo }}</td>
            <td class="px-6 py-2">{{ $articulo->anyo }}</td>
            <td class="px-6 py-2">{{ $articulo->num_paginas }}</td>
            <td class="px-6 py-4">
                <a href="{{ route('articulos.show', $articulo, true) }}"
                    class="px-4 py-1 text-sm text-white bg-blue-400 rounded">mostrar</a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>



</x-monografias>