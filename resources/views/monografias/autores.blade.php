<x-app-layout>
    <x-slot name="header">
        Monografía y sus autores
    </x-slot>

    <div class="p-4">
        <ul>
            <li>
                <strong>Título:</strong> {{ $monografia->titulo }}
            </li>

            <li>
                <strong>Autores de esa monografía:</strong>
                <ul>
                    @foreach ($monografia->autores() as $autor)
                        <li>{{ $autor->nombre }}</li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</x-app-layout>
