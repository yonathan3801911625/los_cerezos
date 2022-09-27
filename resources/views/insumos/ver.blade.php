<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Insumo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <div class="my-2 px-6">
                        <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                        <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $insumo->nombre)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="unidad" value="{{ __('unidad') }}" />
                        <x-jet-input id="unidad" class="block mt-1 w-full" type="text" name="unidad" :value="old('unidad', $insumo->unidad)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="precio" value="{{ __('precio') }}" />
                        <x-jet-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="old('precio', $insumo->precio)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
                        <x-jet-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad', $insumo->cantidad)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="tipo" value="{{ __('Tipo') }}" />
                        <x-jet-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo', $insumo->tipo)" readonly />
                    </div>
                    <div class="my-2 px-6">
                        <x-jet-label for="fecha_vencimiento" value="{{ __('Fecha_vencimiento') }}" />
                        <x-jet-input id="fecha_vencimiento" class="block mt-1 w-full" type="text" name="fecha_vencimiento" :value="old('fecha_vencimiento', $insumo->fecha_vencimiento)" readonly />
                    </div>
                </div>


                <div class="my-4 flex justify-center">
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{route('insumos.index')}}">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>