<div>
    <x-jet-button wire:click="$toggle('abrirModal')">Agregar Insumo
    </x-jet-button>

    <x-jet-dialog-modal wire:model="abrirModal">
        <x-slot name="title">
            Agregar insumo {{ $nombre }}
        </x-slot>

        <x-slot name="content">
            <div class="my-1 p-2">
                <x-jet-label>Nombre del insumo {{ $idInsumo }}</x-jet-label>
                <select
                    class="border-gray-300 focus:border-indigo-300 
                    focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                    rounded-md shadow-sm w-full"
                    wire:model="idInsumo">
                    <option value="">-- Seleccione el insumo --</option>
                    @foreach ($insumo as $insumo)
                        <option value="{{ $insumo->id }}">{{ $insumo->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </x-slot> 

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3 my-4">
            <p>
                {{ $insumo->nombre }} <span class="bg-slate-600 py-1 px-2 rounded text-white">Cantidad:
                    {{ $insumo->cantidad }}</span>
            </p>
       
    
            <x-slot name="content">
                <div class="my-1 p-2">
                    <x-jet-label>Cantidad</x-jet-label>
                    <x-jet-input type="number" wire:model='cantidad' wire:change='updatePrice' />
                </div>
                <div class="my-1 p-2">
                    <span
                        class="px-2 py-1 mx-1 border border-dotted rounded-full border-green-700 cursor-pointer @if ($tipo_movimiento == 'entrada') {{ 'bg-green-700 text-white' }} @endif"
                        wire:click="toggleMoviento">
                        Entrada
                    </span>
                    <span
                        class="px-2 py-1 mx-1 border border-dotted rounded-full border-red-700 cursor-pointer @if ($tipo_movimiento == 'salida') {{ 'bg-red-700 text-white' }} @endif"
                        wire:click="toggleMoviento">
                        Salida
                    </span>
                </div>
                @if ($tipo_movimiento == 'salida')
                    <div class="my-1 p-2">
                        <p>Precio movimiento: {{ $precio_movimiento }}</p>
                    </div>
                @endif
                <p class="text-red-600">{{$msg}}</p>
            </x-slot>
        
    
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('abrirModal')" wire:loading.attr="disabled">
                    Cancelar
                </x-jet-secondary-button>
    
                <x-jet-button class="ml-2" wire:click="save" wire:loading.attr="disabled">
                    Guardar
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
