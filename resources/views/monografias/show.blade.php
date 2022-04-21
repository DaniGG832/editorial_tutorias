
{{-- {{$monografia->withSum('articulos','num_paginas')->get()}} --}}

{{-- {{$monografia->withSum('articulos','num_paginas')->find($monografia->id)->articulos_sum_num_paginas}} --}}

{{$monografia}} 


<x-monografias>
    
    <h1>monografias show</h1>
    
    <div class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
    
        <a href="{{'/monografias'}}">Volver</a>
    </div>
    
    <br>

    <table class="table-auto">
        <thead class="bg-blue-500">
            <th class="px-6 py-2 text-white">
                Titulo
            </th>
            <th class="px-6 py-2 text-white">
                Año
            </th>
        </thead>
        <tbody class="bg-blue-100">
            
                <tr>
                    <td class="px-6 py-2">{{ $monografia->titulo }}</td>
                    <td class="px-6 py-2">{{ $monografia->anyo }}</td>
                </tr>
            
        </tbody>
    </table>

    <br>
    <br>
    <div>
        <h1>Número de páginas</h1>
        <td class="px-6 py-2">{{ $monografia->articulos_sum_num_paginas }}</td>
    </div>

   


</x-monografias>