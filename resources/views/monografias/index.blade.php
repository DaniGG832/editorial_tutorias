<x-monografias>

    <h1>monografias index</h1>

    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Monografias</h1>
        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            id
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Titulo
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Año
                        </th>
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Articulos
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            paginas
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            mostrar
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Editar
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Borrar
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($monografias as $monografia)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $monografia->id }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $monografia->titulo }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $monografia->anyo }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $monografia->articulos->count() }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $monografia->articulos_sum_num_paginas }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('monografias.show', $monografia, true) }}"
                                    class="px-4 py-1 text-sm text-white bg-blue-400 rounded">mostrar</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('monografias.edit', $monografia) }}"
                                    class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('monografias.destroy', $monografia) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('¿Seguro?')"
                                        class="px-4 py-1 text-sm text-white bg-red-400 rounded"
                                        type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="/monografias/create" class="mt-4 text-blue-900 hover:underline">Insertar nueva monografia</a>
    </div>
</x-monografias>
