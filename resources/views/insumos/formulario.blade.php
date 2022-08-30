@csrf 
<div class ="block">
    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $insumo->nombre)" required autofocus />

    <x-jet-label for="unidad" value="{{ __('unidad') }}" />
    <x-jet-input id="unidad" class="block mt-1 w-full" type="text" name="unidad" :value="old('unidad', $insumo->unidad)" required autofocus />

    <x-jet-label for="precio" value="{{ __('precio') }}" />
    <x-jet-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="old('precio', $insumo->precio)" required autofocus />
    
    <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="text" name="cantidad" :value="old('cantidad', $insumo->cantidad)" required autofocus />
    
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