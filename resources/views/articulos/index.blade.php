<x-monografias>

    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Articulos</h1>

    </div>
    <div
        class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

        <a href="{{ '/monografias' }}"> ir a monografias</a>
    </div>

    <div
        class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

        <a href="{{ '/autores' }}"> ir a autores</a>
    </div>

    <a href="/articulos/create" class="mt-4 text-blue-900 hover:underline">Insertar nuevo articulo</a>
    </div>
    <br>
    <div class="border border-gray-200 shadow">
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


                {{-- Para ascendente :$articulos->sortBy('anyo')

                 @foreach ($articulos->sortBy('anyo') as $articulo) --}}

                @foreach ($articulos->sortByDesc('anyo') as $articulo)
                    <tr>

                        <td class="px-6 py-2">{{ $articulo->titulo }}</td>
                        <td class="px-6 py-2">{{ $articulo->anyo }}</td>
                        <td class="px-6 py-2">{{ $articulo->num_paginas }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('articulos.show', $articulo, true) }}"
                                class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Mostrar</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('articulos.edit', $articulo, true) }}"
                                class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('articulos.destroy', $articulo) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('¿Seguro que desea borrar la articulo?')"
                                    class="px-4 py-1 text-sm text-white bg-red-400 rounded"
                                    type="submit">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>



</x-monografias>
