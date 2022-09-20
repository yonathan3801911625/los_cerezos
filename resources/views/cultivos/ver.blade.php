<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Cultivo') }}
        </h2>
    </x-slot>
    <div class="p-4">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Información General
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="my-4">
                                <x-jet-label for="nombre" value="{{ __('Nombre')}}" />
                                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $cultivo->nombre)" readonly />
                            </div>

                            <div class="my-4">
                                <x-jet-label for="fecha_inicio" value="{{ __('Fecha Inicio')}}" />
                                <x-jet-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="old('fecha_inicio', $cultivo->fecha_inicio)" readonly />
                            </div>

                            <div class="my-4">
                                <x-jet-label for="fecha_cosecha" value="{{ __('Fecha Cosecha')}}" />
                                <x-jet-input id="fecha_cosecha" class="block mt-1 w-full" type="date" name="fecha_cosecha" :value="old('fecha_cosecha', $cultivo->fecha_cosecha)" readonly />
                            </div>

                            <div class="my-4">
                                <x-jet-label for="area_terreno" value="{{ __('Area Terreno')}}" />
                                <x-jet-input id="area_terreno" class="block mt-1 w-full" type="number" name="area_terreno" :value="old('area_terreno', $cultivo->area_terreno)" readonly />
                            </div>

                            <div class="my-4">
                                <x-jet-label for="densidad" value="{{ __('Densidad')}}" />
                                <x-jet-input id="densidad" class="block mt-1 w-full" type="number" name="densidad" :value="old('densidad', $cultivo->densidad)" readonly />
                            </div>

                            <div class="my-4">
                                <x-jet-label for="tipo" value="{{ __('Tipo Cultivo')}}" />
                                <x-jet-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo', $cultivo->tipo)" readonly />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Fases
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- {{$fasesCultivo}} -->

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            Nombre fase
                                        </th>

                                        <th>
                                            Fecha asignación fase
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasesCultivo as $faseCultivo)
                                    <tr>
                                        <td>
                                            {{$faseCultivo->nombre_fase}}
                                        </td>
                                        <td>
                                            {{$faseCultivo->created_at}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>



            <div class="my-4 flex justify-center">
                <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{route('cultivos.index')}}">
                    Volver
                </a>
            </div>

        </div>
    </div>
</x-app-layout>