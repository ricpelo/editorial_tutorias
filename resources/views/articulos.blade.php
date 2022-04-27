<x-app-layout>
    <x-slot name="header">
        Artículos
    </x-slot>

    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Artículos</h1>
        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Título
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Año
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Número de páginas
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Número de autores
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Número de monografías
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($articulos as $articulo)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-blue-500 hover:underline">
                                {{ $articulo->titulo }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $articulo->anyo }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $articulo->num_paginas }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $articulo->autores_count }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $articulo->monografias_count }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
