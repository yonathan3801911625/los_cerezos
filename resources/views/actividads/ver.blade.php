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
                    <div class="my-2 px-6">
                        <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                        <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $actividad->nombre)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="estado" value="{{ __('Estado') }}" />
                        <x-jet-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado', $actividad->estado)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="fecha_realizacion" value="{{ __('Fecha de Realizacion') }}" />
                        <x-jet-input id="fecha_realizacion" class="block mt-1 w-full" type="text" name="fecha_realizacion" :value="old('fecha_realizacion', $actividad->fecha_realizacion)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="valor" value="{{ __('Valor') }}" />
                        <x-jet-input id="valor" class="block mt-1 w-full" type="text" name="valor" :value="old('valor', $actividad->valor)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="observacion" value="{{ __('Observacion') }}" />
                        <x-jet-input id="observacion" class="block mt-1 w-full" type="text" name="cantidad" :value="old('observacion', $actividad->observacion)" readonly />
                    </div>

                </div>


                <div class="my-4 flex justify-center">
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{route('actividads.index')}}">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>