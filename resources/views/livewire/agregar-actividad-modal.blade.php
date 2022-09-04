<div>
    <x-jet-button wire:click="$toggle('abrirModal')">Agregar Actividad
    </x-jet-button>

    <x-jet-dialog-modal wire:model="abrirModal">
        <x-slot name="title">
            <div class="p-2">
                <h2>Agregar Actividad</h2>
            </div>
        </x-slot>

        <x-slot name="content">
            <div>
                <div class="my-1 p-2">
                    <x-jet-label>Nombre de la Actividad</x-jet-label>
                    {{--{{ $actividads }} --}}
                    <select
                        class="border-gray-300 focus:border-indigo-300 
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        rounded-md shadow-sm w-full"
                        wire:model="keyActividadSelected" wire:change='onChangeActividad'>
                        <option value="">-- Seleccione la actividad --</option>
                        @foreach ($actividads as $key => $actividad)
                            <option value="{{ $key }}">{{ $actividad->nombre }}</option>
                        @endforeach
                    </select>
                    {{-- <br>
                    {{ $keyactividadSelected }} --}}
                    {{-- <br>
                    {{ $actividadSelected }} --}}

                </div>
                @if ($actividadSelected)
                    <div class="my-1 p-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Actividad</th>
                                
                            </tr>
                            <tr>
                                <td>
                                    {{ $actividadSelected->nombre }}
                                </td>
                                
                            </tr>
                        </table>
                    </div>

                    
                    
                   
                    
                    <div class="my-1 p-2">
                    <table class="table table-bordered">
                            <tr>
                                <th>Actividad</th>
                                
                            </tr>
                            <tr>
                                <td>
                                    {{ $actividadSelected->nombre }}
                                </td>
                                
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <th>Actividad
                                
                            
                            
                            movimientos
                        <x-jet-input 
                            type="number" 
                            class="w-full"
                            wire:model='cantidad' 
                            wire:input='updatePrice' 
                            min="0" 
                            max="{{ $actividadSelected->cantidad }}" 
                        />
                        </th>
                    </tr>
                    </div>
                            
                            
                            
                                
                            
                        </table>
                        
                    

                    <div class="my-1 p-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Cantidad</th>
                                <th>Precio unidad</th>
                                <th>Precio total</th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $cantidad }}
                                </td>
                                <td>
                                    ${{ $actividadSelected->valor }}
                                </td>
                                <td>
                                    ${{ $valor }}
                                </td>
                            </tr>
                        </table>
                        {{-- 
                            {{Auth::user()}}
                            {{Auth::user()->id}} 
                            {{Auth::user()->name}} 
                        --}}
                    </div>
                @endif
            </div>
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


        
    

