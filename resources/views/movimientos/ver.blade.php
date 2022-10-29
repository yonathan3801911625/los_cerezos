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
                    <x-jet-label for="insumo_id" value="{{ __('Id')}}" />
                    <x-jet-input id="insumo_id" class="block mt-1 w-full" type="text" name="insumo_id" :value="old('insumo_id', $movimiento->insumo_id)" readonly />
                    <x-jet-label for="tipoMovimiento" value="{{ __('Tipo de movimiento')}}" />
                    <x-jet-input id="tipoMovimiento" class="block mt-1 w-full" type="text" name="tipoMovimiento" :value="old('tipoMovimiento', $movimiento->tipo)" readonly />
                    <x-jet-label for="cantidad" value="{{ __('Cantidad')}}" />
                    <x-jet-input id="cantidad" class="block mt-1 w-full" type="text" name="cantidad" :value="old('cantidad', $movimiento->cantidad)" readonly />
                    <x-jet-label for="valor" value="{{ __('Valor')}}" />
                    <x-jet-input id="valor" class="block mt-1 w-full" type="text" name="valor" :value="old('valor', $movimiento->valor_total)" readonly />
                    <x-jet-label for="fecha" value="{{ __('Fecha')}}" />
                    <x-jet-input id="fecha" class="block mt-1 w-full" type="double" name="fecha" :value="old('fecha', $movimiento->fecha)" readonly />



                    <div class="flex justify-center">
                        <div class="p-2">
                            <div class="flex justify-end">
                                <a href="{{route('movimientos.index')}}">
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
