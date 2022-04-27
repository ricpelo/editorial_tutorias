<x-app-layout>
    <x-slot name="header">
        Editar una monografía
    </x-slot>
    <div class="p-4">
        <form action="{{ route('monografias.update', $monografia) }}" method="POST">
            @method('PUT')
            <x-monografias.form :monografia="$monografia" />
        </form>
    </div>
</x-app-layout>
