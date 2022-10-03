<div>
    <x-jet-button wire:click="$toggle('abrirModal')">Agregar Costo Adicional
    </x-jet-button>

    <x-jet-dialog-modal wire:model="abrirModal">
        <x-slot name="title">
            <div class="p-2">
                <h2>Agregar Costo</h2>
            </div>
        </x-slot>

        <x-slot name="content">
        <div>
            <div class="my-1 p-2">
                    <x-jet-label>Nombre del costo</x-jet-label>
                    {{--{{ $costos }} --}}
                    <select class="border-gray-300 focus:border-indigo-300 
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        rounded-md shadow-sm w-full" wire:model="keyCostoSelected" wire:change='onChangeCosto'>
                        <option value="">-- Seleccione el costo--</option>
                    </select>
            </div>
        </div>
        
            
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('abrirModal')" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>

            <button
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-2"
                {{ $disableForm ? 'disabled' : '' }}
                wire:click="save" wire:loading.attr="disabled">
                Guardar
            </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
