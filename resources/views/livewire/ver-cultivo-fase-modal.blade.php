<div>
    <x-jet-button wire:click="$toggle('abrirModal')">Ver</x-jet-button>

    <x-jet-dialog-modal wire:model="abrirModal">
        <x-slot name="title">
            <div class="p-2">
                <h2>Ver Estado
                    {{$cultivo_fase_id}}
                </h2>
            </div>
        </x-slot>
        <x-slot name="content">
            {{-- {{ $insumos }} --}}
            <div class="border-gray-300 focus:border-indigo-300 
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        rounded-md shadow-sm w-full" wire:model="keyInsumoSelected">

                @foreach ($insumos as $key => $insumoSelected)
                <p value="{{ $key }}">{{ $insumoSelected->insumo }}</p>
                @endforeach
            </div>
            @if ($insumoSelected)
            <div class="my-1 p-2">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Insumos
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <!-- {{ $movimientosInsumos }} -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre Insumo</th>
                                            <th>Tipo movimiento</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Total</th>
                                            <th>Fecha Movimiento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($movimientosInsumos as $item)
                                        <tr>
                                            <td>{{$item->nombre_insumo}}</td>
                                            <td>
                                                @if ($item->tipo_movimiento)
                                                    Devolución
                                                @else
                                                    Salida
                                                @endif
                                            </td>
                                            <td>{{$item->cantidad_movimientos_insumos}}</td>
                                            <td>{{$item->precio_insumo}}</td>
                                            <td>{{$item->precio_insumo*$item->cantidad_movimientos_insumos}}</td>
                                            <td>{{$item->fecha_movimiento}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Actividades
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
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