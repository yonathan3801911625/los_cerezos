@csrf
<div class="block">
    <x-jet-label for="nombre" value="{{ __('Nombre')}}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $cultivo->nombre)" required autofocus />
    <x-jet-label for="fecha_inicio" value="{{ __('Fecha Inicio')}}" />
    <x-jet-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="old('fecha_inicio', $cultivo->fecha_inicio)" required autofocus />
    <x-jet-label for="fecha_cosecha" value="{{ __('Fecha Cosecha')}}" />
    <x-jet-input id="fecha_cosecha" class="block mt-1 w-full" type="date" name="fecha_cosecha" :value="old('fecha_cosecha', $cultivo->fecha_cosecha)" required autofocus />
    <x-jet-label for="area_terreno" value="{{ __('Area Terreno')}}" />
    <x-jet-input id="area_terreno" class="block mt-1 w-full" type="double" name="area_terreno" :value="old('area_terreno', $cultivo->area_terreno)" required autofocus />
    <x-jet-label for="densidad" value="{{ __('Densidad')}}" />
    <x-jet-input id="densidad" class="block mt-1 w-full" type="double" name="densidad" :value="old('densidad', $cultivo->densidad)" required autofocus />
    <x-jet-label for="tipo" value="{{ __('Tipo Cultivo')}}" />
    <x-jet-input id="tipo" class="block mt-1 w-full" type="enum" name="tipo" :value="old('tipo', $cultivo->tipo)" required autofocus />
    <div class="flex justify-center">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{('cultivos.create')}}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>
</div>