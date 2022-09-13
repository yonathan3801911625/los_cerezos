<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }} {{ $cultivo->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <form action="{{ route('cultivos.update', $cultivo) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="my-1">
                        <x-jet-label for="fase">Selecciona una fase</x-jet-label>
                        <select name="fase" id="fase">
                            @foreach ($fases as $fase)
                            <option value="{{ $fase->id }}">{{ $fase->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-jet-button>Agregar</x-jet-button>

                </form>
            </div><br>

            {{-- traigo la relación con fases y la listo --}}
            @foreach ($cultivo->fases as $fase)
            <!-- {{ $fase->pivot }} -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2 my-2">
                <p>{{ $fase->nombre }}</p>
                <ul class="list-disc list-inside">
                    @foreach ($fase->actividades as $actividad)
                    <li class="my-2">{{ $actividad->nombre }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('destroyCultivoFase') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="cultivo_fase" value="{{ $fase->pivot }}">
                    <button class="inline-block px-4 py-2.5 bg-red-600 text-white font-medium text-xs 
                            leading-tight uppercase rounded 
                            shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 
                            focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg 
                            transition duration-150 ease-in-out " type="submit">
                        Eliminar
                    </button><br><br>

                </form>

                <livewire:agregar-insumo-modal /><br>
                <livewire:agregar-actividad-modal :actividad=$actividad /><br>
                <livewire:agregar-modal />

            </div>
            @endforeach


        </div>

    </div>
</x-app-layout>




{{-- {{$actividad}} --}}
{{-- {{$insumo}} --}}