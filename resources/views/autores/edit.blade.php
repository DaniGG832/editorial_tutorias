<x-monografias>

    <h1>edit autores</h1>
    <br>
    <div
        class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

        <a href="{{ '/autores' }}"> volver</a>
    </div>
    {{-- {{$autor}} --}}
    
        <x-formAutores :autor=$autor>
    
            <form action="{{route('autores.update',$autor,false)}}" method="post">
    
    @method('PUT')
    
        </x-formAutores> 
    
    </x-monografias>