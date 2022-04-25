<x-monografias>

    <h1>autores index</h1>

    <br>
    <div
        class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

        <a href="{{ '/articulos' }}"> ir a articulos</a>
    </div>



    <a href="/autores/create" class="mt-4 text-blue-900 hover:underline">Crear nuevo autor</a>


    <br>


    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">

        @foreach ($autores as $autor)
            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">

                <div class="p-3">


                    <h2 class="font-semibold text-xl leading-6 text-blue-700 my-2">
                        <span class="text-sm text-primary text-gray-700">Autor</span>
                        {{ $autor->nombre }}
                    </h2>
                    <p class="paragraph-normal text-blue-400">
                        Articulos
                    </p>
                    @foreach ($autor->articulos as $articulo)
                        <p class="paragraph-normal text-blue-800">
                            -{{ $articulo->titulo }}
                        </p>
                    @endforeach
                    <br>


                    <a href="{{ route('autores.show', $autor, true) }}"
                        class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Mostrar</a>

                    <a href="{{ route('autores.edit', $autor, true) }}"
                        class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>

                    <form action="{{ route('autores.destroy', $autor) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <br>
                        <button onclick="return confirm('¿Seguro que desea borrar el autor?')"
                            class="px-4 py-1 text-sm text-white bg-red-400 rounded" type="submit">Borrar</button>
                    </form>

                </div>
            </div>
        @endforeach


    </div>




</x-monografias>
