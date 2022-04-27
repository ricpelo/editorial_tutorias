<x-app-layout>
    <x-slot name="header">
        Monografía
    </x-slot>

    <div class="p-4">
        <ul>
            <li>
                <strong>Título:</strong> {{ $monografia->titulo }}
            </li>

            <li>
                <strong>Año:</strong> {{ $monografia->anyo }}
            </li>
        </ul>

        <ul>
            @foreach ($monografia->articulos as $articulo)
                <li>
                    <strong>Título del artículo:</strong> {{ $articulo->titulo }}
                </li>
            @endforeach
            <li><strong>Tamaño total en páginas:</strong> {{ $monografia->articulos_sum_num_paginas }}</li>
        </ul>

        <div class="mt-4">
            <a href="/monografias" class="text-white border-green-700 border-2 bg-green-700 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Volver</a>
        </div>
    </div>
</x-app-layout>
