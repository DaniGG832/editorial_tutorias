
<br>
{{$autor}}

<x-monografias>

    <div
    class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

    <a href="{{ '/autores' }}">Volver autores</a>
</div>
<div
class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

<a href="{{ '/articulos' }}">Volver articulos</a>
</div>

<br>

<table class="table-auto">
    <thead class="bg-blue-500">
        <th class="px-6 py-2 text-white">
            Nombre
        </th>
        
    </thead>
    <tbody class="bg-blue-100">

        <tr>
            <td class="px-6 py-2">{{ $autor->nombre }}</td>
            
        </tr>

    </tbody>
</table>



</x-monografias>