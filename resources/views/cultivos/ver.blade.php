<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Cultivo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="nombre" value="{{ __('Nombre')}}" />
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $cultivo->nombre)" readonly />
                    <x-jet-label for="fecha_inicio" value="{{ __('Fecha Inicio')}}" />
                    <x-jet-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="old('fecha_inicio', $cultivo->fecha_inicio)" readonly />
                    <x-jet-label for="fecha_cosecha" value="{{ __('Fecha Cosecha')}}" />
                    <x-jet-input id="fecha_cosecha" class="block mt-1 w-full" type="date" name="fecha_cosecha" :value="old('fecha_cosecha', $cultivo->fecha_cosecha)" readonly />
                    <x-jet-label for="area_terreno" value="{{ __('Area Terreno')}}" />
                    <x-jet-input id="area_terreno" class="block mt-1 w-full" type="double" name="area_terreno" :value="old('area_terreno', $cultivo->area_terreno)" readonly />
                    <x-jet-label for="densidad" value="{{ __('Densidad')}}" />
                    <x-jet-input id="densidad" class="block mt-1 w-full" type="double" name="densidad" :value="old('densidad', $cultivo->densidad)" readonly />
                    <x-jet-label for="tipo" value="{{ __('Tipo Cultivo')}}" />
                    <x-jet-input id="tipo" class="block mt-1 w-full" type="enum" name="tipo" :value="old('tipo', $cultivo->tipo)" readonly />
                    

                    
                    <div class="flex justify-center">
                        <div class="p-2">
                            <div class="flex justify-end">
                                <a href="{{route('cultivos.index')}}">
                                    <x-jet-button>
                                        Volver
                                    </x-jet-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>