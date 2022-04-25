<x-monografias>

<h1>create autores</h1>
<br>

{{$autor}}

    <x-formAutores :autor=$autor>

        <form action="{{route('autores.store',[],false)}}" method="post">



    </x-formAutores>

</x-monografias>