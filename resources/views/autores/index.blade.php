<x-monografias>

    <h1>autores index</h1>

    <br>

    <a href="/autores/create">Crear nuevo autor</a>

    <br>

    <ul>
        @foreach ($autores as $autor)
            <h2>Autor</h2>
            <li class="text-xl">Nombre: {{ $autor->nombre }} </li>

            <p>articulos</p>

            @foreach ($autor->articulos as $articulo)
               -{{$articulo->titulo}} 
            @endforeach
            
<br>
            <a href="{{ route('autores.edit', $autor, true) }}"
                class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>

            <a href="{{ route('autores.show', $autor, true) }}"
                class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Mostrar</a>

            <form action="{{ route('autores.destroy', $autor) }}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('¿Seguro que desea borrar el autor?')"
                    class="px-4 py-1 text-sm text-white bg-red-400 rounded" type="submit">Borrar</button>
            </form>
            <br>
        @endforeach
    </ul>

</x-monografias>
