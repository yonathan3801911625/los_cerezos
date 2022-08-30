<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear cultivo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <form action="{{ route('cultivos.store') }}" method="post">
                    @csrf
                    <div class="my-1">
                        <x-jet-label for="nombre">Nombre</x-jet-label>
                        <x-jet-input type="text" id="nombre" name="nombre" class="w-full" />
                    </div>
                    <div class="my-1">
                        <x-jet-label for="fecha_inicio">Fecha de inicio</x-jet-label>
                        <x-jet-input type="date" id="fecha_inicio" name="fecha_inicio" class="w-full" />
                    </div>
                    <div class="my-1">
                        <x-jet-label for="fecha_cosecha">Fecha de cosecha</x-jet-label>
                        <x-jet-input type="date" id="fecha_cosecha" name="fecha_cosecha" class="w-full" />
                    </div>
                    <div class="my-1">
                        <x-jet-label for="area_terreno">Área del terreno</x-jet-label>
                        <x-jet-input type="number" id="area_terreno" name="area_terreno" class="w-full" />
                    </div>
                    <div class="my-1">
                        <x-jet-label for="densidad">Densidad del terreno</x-jet-label>
                        <x-jet-input type="number" id="densidad" name="densidad" class="w-full" />
                    </div>
                    <div class="my-1">
                        <x-jet-label for="tipo">Tipo de cultivo</x-jet-label>
                        <select name="tipo" id="tipo">
                            <option value="corta duración">Corta duración</option>
                            <option value="perenne">Perenne</option>
                        </select>
                    </div>
                    <x-jet-button>Guardar</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
