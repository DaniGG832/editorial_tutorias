<x-monografias>

    <h1>create autores</h1>
    <br>
    <div
        class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

        <a href="{{ '/autores' }}"> Volver</a>
    </div>
    {{-- {{$autor}} --}}

    <x-formAutores :autor=$autor>

        <form action="{{ route('autores.store', [], false) }}" method="post">

    </x-formAutores>

</x-monografias>
