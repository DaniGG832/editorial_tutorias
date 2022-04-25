<x-monografias>

    <h1>edit autores</h1>
    <br>
    
    {{$autor}}
    
        <x-formAutores :autor=$autor>
    
            <form action="{{route('autores.update',$autor,false)}}" method="post">
    
    @method('PUT')
    
        </x-formAutores> 
    
    </x-monografias>