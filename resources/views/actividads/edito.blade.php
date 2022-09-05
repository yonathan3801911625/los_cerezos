<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cultivo') }} {{ $actividad->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <form action="{{ route('actividades.update', $actividad) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="my-1">
                        <x-jet-label for="costo">Selecciona una Costo Adicional</x-jet-label>
                        <select name="costo" id="costo">
                            @foreach ($costos as $costo)
                            <option value="{{ $costo->id }}">{{ $costo->precio }}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-jet-button>Agregar</x-jet-button>
                </form>
            </div>

            {{-- traigo la relación con Actividades y la listo --}}
            @foreach ($actividad->insumos as $insumos)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2 my-2">
                <p>{{ $insumo->nombre }}</p>
                <ul class="list-disc list-inside">
                    @foreach ($actividad->insumos as $insumo)
                    <li class="my-2">{{$insumo->nombre}}</li>
                    @endforeach
                </ul>
                <livewire:agregar-insumo-modal  :insumo="$insumo" />
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>