<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Actividad') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="nombre" value="{{ __('Nombre')}}" />
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $actividad->nombre)" readonly />
                    <x-jet-label for="estado" value="{{ __('Estado')}}" />
                    <x-jet-input id="estado" class="block mt-1 w-full" type="enum" name="estado" :value="old('estado', $actividad->estado)" readonly />
                    <x-jet-label for="fecha_realizacion" value="{{ __('Fecha Realizacion')}}" />
                    <x-jet-input id="fecha_realizacion" class="block mt-1 w-full" type="date" name="fecha_realizacion" :value="old('fecha_realizacion', $actividad->fecha_realizacion)" readonly />
                    <x-jet-label for="valor" value="{{ __('Valor')}}" />
                    <x-jet-input id="valor" class="block mt-1 w-full" type="integer" name="valor" :value="old('valor', $actividad->valor)" readonly />
                    <x-jet-label for="observacion" value="{{ __('Observacion')}}" />
                    <x-jet-input id="observacion" class="block mt-1 w-full" type="longtext" name="observacion" :value="old('observacion', $actividad->observacion)" readonly />
                    

                    
                    <div class="flex justify-center">
                        <div class="p-2">
                            <div class="flex justify-end">
                                <a href="{{route('actividades.index')}}">
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