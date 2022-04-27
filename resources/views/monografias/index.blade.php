<x-app-layout>
    <x-slot name="header">
        Monografías
    </x-slot>
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Monografías</h1>
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
                            <td class="px-6 py-4 text-sm text-blue-500 hover:underline">
                                <a href="{{ route('monografias.show', $monografia) }}">
                                    {{ $monografia->titulo }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $monografia->anyo }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('monografias.edit', $monografia) }}"
                                    class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('monografias.destroy', $monografia) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-1 text-sm text-white bg-red-400 rounded">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="/monografias/create" class="mt-4 text-blue-900 hover:underline">Insertar una nueva monografía</a>
    </div>
    {{ $monografias->links() }}
</x-app-layout>
