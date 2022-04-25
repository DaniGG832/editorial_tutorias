<x-monografias>

    <h1>autores index</h1>

    <br>

    <a href="/autores/create">Crear nuevo autor</a>

    <br>

    <ul>
        @foreach ($autores as $autor)
            <li>=>{{ $autor }} </li>
           
            <a href="{{ route('autores.edit', $autor, true) }}"
                class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>
            
                <a href="{{ route('autores.show', $autor, true) }}"
                class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Mostrar</a>
        @endforeach
    </ul>

</x-monografias>
