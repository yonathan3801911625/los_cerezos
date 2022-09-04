<div>
    <x-jet-button wire:click="$toggle('abrirModal')">Agregar actividad</x-jet-button>

    <x-jet-dialog-modal wire:model="abrirModal">


        <x-slot name="title">
            Agregar actividad {{ $nombre }}
        </x-slot>

        <x-slot name="content">
            <div class="my-1 p-2">
                <x-jet-label>Id de la actividad {{ $idActividad }}</x-jet-label>
                <select
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                    wire:model="idActividad">
                    <option value="">-- Seleccione la actividad --</option>
                    @foreach ($actividad as $act)
                        <option value="{{ $act->id }}">{{ $act->nombre }}</option>
                    @endforeach
                    
                </select>
            </div>


        
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
                    <p>Pecio movimiento: {{ $precio_movimiento }}</p>
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

        
    

