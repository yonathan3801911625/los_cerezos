@csrf
<div class="block">
<x-jet-label for="fecha" value="{{ __('Fecha')}}"/>
<x-jet-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha', $costo->fecha)" required autofocus />
<x-jet-label for="precio" value="{{ __('Precio')}}"/>
<x-jet-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="old('precio', $costo->precio)" required autofocus />
<x-jet-label for="descripcion" value="{{ __('Descripcion')}}"/>
<x-jet-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion', $costo->descripcion)" required autofocus />

<!-- fase -->
<div class="block">
    <x-jet-label for="nombrefase" value="{{ __('Nombre Fase')}}" />
    <select class="form-select appearance-none
focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="nombremafases"> 
        <option selected>Seleccione una fasee</option>
        @foreach ($fases as $fase)
        <option value="{{$fase->id}}"> {{$fase->nombrefases}}</option>
        @endforeach
    </select>
</div>

<!-- actividad -->
<div class="block">
    <x-jet-label for="nombreactividad" value="{{ __('Nombre Actividad')}}" />
    <select class="form-select appearance-none
block 
w-full 
px-3
py-1.5
text-base
font-normal
text-gray-700
bg-white bg-clip-padding bg-no-repeat 
border border-solid border-gray-300 
rounded 
transition
ease-in-out 
m-0 
focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="nombremActividad">
        <option selected>Seleccione una actividad</option>
        @foreach ($actividads as $actividad)
        <option value="{{$actividad->id}}"> {{$actividad->nombreactividad}}</option>
        @endforeach
    </select>
</div>


<div class="flex justify-center">
<div class="p-2">
    <div class="flex justify-end">
    <a href="{{('costos.create')}}">
        <x-jet-button type="submit">
            Guardar
        </x-jet-button>
    </div>
</div>
</div>
</div>