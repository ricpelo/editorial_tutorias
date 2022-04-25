<x-app-layout>
    <x-slot name="header">
        Insertar una nueva monografía
    </x-slot>
    <div class="m-10">
        <form action="{{ route('monografias.store', [], false) }}" method="POST">
            <x-monografias.form :monografia="$monografia"/>
        </form>
    </div>
</x-app-layout>
