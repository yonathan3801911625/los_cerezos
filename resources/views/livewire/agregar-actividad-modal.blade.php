<div>
    <x-jet-button wire:click="$toggle('abrirModal')">Agregar actividad</x-jet-button>

    <x-jet-dialog-modal wire:model="abrirModal">


        <x-slot name="title">
            Agregar actividad {{ $nombre }}
        </x-slot>

        <x-slot name="content">
            <div class="my-1 p-2">
                <x-jet-label>Nombre de la actividad {{ $idActividad }}</x-jet-label>
                <select
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                    wire:model="idActividad">
                    <option value="">-- Seleccione la actividad --</option>
                    @foreach ($actividad as $act)
                        <option value="{{ $act->id }}">{{ $act->nombre }}</option>
                    @endforeach
                    {{-- <option value="finalizado">Finalizado</option>
                    <option value="en_proceso">En proceso</option>
                    <option value="pendiente">Pendiente</option> --}}
                </select>
            </div>
            {{-- <div class="my-1 p-2">
                <x-jet-label>Estado</x-jet-label>
                <select wire:model="estado">
                    <option value="finalizado">Finalizado</option>
                    <option value="en_proceso">En proceso</option>
                    <option value="pendiente">Pendiente</option>
                </select>
            </div> --}}
            {{-- <div class="my-1 p-2">
                <x-jet-label>valor</x-jet-label>
                <x-jet-input type="number" wire:model="valor" class="w-full" />
            </div> --}}
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
