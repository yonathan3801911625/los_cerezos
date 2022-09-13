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
                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $insumo->nombre)" readonly/>
                
                <x-jet-label for="unidad" value="{{ __('unidad') }}" />
                <x-jet-input id="unidad" class="block mt-1 w-full" type="text" name="unidad" :value="old('unidad', $insumo->unidad)" readonly />

                <x-jet-label for="precio" value="{{ __('precio') }}" />
                <x-jet-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="old('precio', $insumo->precio)" readonly/>

                <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
                <x-jet-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad', $insumo->cantidad)" readonly/>

                <x-jet-label for="tipo" value="{{ __('Tipo') }}" />
                <x-jet-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo', $insumo->tipo)" readonly />

                <x-jet-label for="fecha_vencimiento" value="{{ __('Fecha_vencimiento') }}" />
                <x-jet-input id="fecha_vencimiento" class="block mt-1 w-full" type="text" name="fecha_vencimiento" :value="old('fecha_vencimiento', $insumo->fecha_vencimiento)" readonly />
                </div>
            </div>
            <a href="{{ route('insumos.index',$insumo) }}"> 
            <x-jet-button>Volver</x-jet-button>
        </div>
        <div>
            <livewire:agregar-modal/>
        </div>
    </div>
</x-app-layout>