@csrf
<div class="block">
    <x-jet-label for="insumo_id" value="{{ __('Id insumo')}}" />
    <x-jet-input id="insumo_id" class="block mt-1 w-full" type="text" name="insumo_id" :value="old('insumo_id', $movimiento->insumo_id)" required autofocus />
    <x-jet-label for="tipo_movimiento" value="{{ __('Tipo de movimiento')}}" />
    <x-jet-input id="tipo_movimiento" class="block mt-1 w-full" type="text" name="tipo_movimiento" :value="old('tipo_movimiento', $movimiento->tipo_movimiento)" required autofocus />
    <x-jet-label for="cantidad" value="{{ __('Cantidad')}}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="text" name="cantidad" :value="old('cantidad', $movimiento->cantidad)" required autofocus />
    <x-jet-label for="valor" value="{{ __('Valor')}}" />
    <x-jet-input id="valor" class="block mt-1 w-full" type="double" name="valor" :value="old('valor', $movimiento->valor)" required autofocus />
    <x-jet-label for="fecha" value="{{ __('Fecha')}}" />
    <x-jet-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha', $movimiento->fecha)" required autofocus />
    <div class="flex justify-center">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{('movimientos.create')}}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>
</div>