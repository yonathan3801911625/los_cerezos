<div>
    <x-jet-button wire:click="$toggle('abrirModal')">Ver</x-jet-button>

    <x-jet-dialog-modal wire:model="abrirModal">
        <x-slot name="title">
            <div class="p-2">
                <h2>Ver Estado</h2>
            </div>
        </x-slot>
        <x-slot name="content">
            {{-- {{ $insumos }} --}}
            <div class="border-gray-300 focus:border-indigo-300 
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        rounded-md shadow-sm w-full" wire:model="keyInsumoSelected" >
                
                @foreach ($insumos as $key => $insumoSelected)
                <p value="{{ $key }}">{{ $insumoSelected->insumo }}</p>
                @endforeach
            </div>
            @if ($insumoSelected)
            <div class="my-1 p-2">
                <table class="table table-bordered">
                    <tr>
                        <th>Insumo</th>
                    </tr>
                    <tr>
                        <td>
                            {{ $insumoSelected}}
                        </td>

                    </tr>
                </table>
            </div>
            @endif


            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('abrirModal')" wire:loading.attr="disabled">
                    Cancelar
                </x-jet-secondary-button>

            </x-slot>
        </x-slot>
    </x-jet-dialog-modal>
</div>