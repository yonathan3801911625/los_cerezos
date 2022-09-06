@csrf
<div class="block">
    <x-jet-label for="codigo" value="{{ __('Codigo') }}" />
    <x-jet-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo', $insumo->codigo)" required autofocus />

    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $insumo->nombre)" required autofocus />

    <div class="my-1">
        <x-jet-label for="tipo">Selecciona la unidad de medida</x-jet-label>
        <select name="unidad" id="unidad">
            <option value="Kg">Kg</option>
            <option value="M">M</option>
            <option value="M2">M2</option>
            <option value="L">L</option>
        </select>
    </div>

    <x-jet-label for="precio" value="{{ __('precio') }}" />
    <x-jet-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="old('precio', $insumo->precio)" required autofocus />

    <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad', $insumo->cantidad)" required autofocus />

    <x-jet-label for="tipo" value="{{ __('Tipo') }}" />
    <x-jet-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo', $insumo->tipo)" required autofocus />

    <x-jet-label for="fecha_vencimiento" value="{{ __('Fecha_vencimiento') }}" />
    <x-jet-input id="fecha_vencimiento" class="block mt-1 w-full" type="date" name="fecha_vencimiento" :value="old('fecha_vencimiento', $insumo->fecha_vencimiento)" required autofocus />


    <div class="flex justify-center">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{ route('insumos.create') }}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>

</div>