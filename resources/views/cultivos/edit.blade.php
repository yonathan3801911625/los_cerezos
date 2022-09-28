<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }} {{ $cultivo->nombre }}
        </h2>
    </x-slot>

    <div class="p-4">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

            <div class="my-6">
                <form action="{{ route('cultivos.update', $cultivo) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="my-1">
                        <x-jet-label for="fase">Selecciona una fase</x-jet-label>
                        <select name="fase" id="fase">
                            @foreach ($fases as $fase)
                            <option value="{{ $fase->id }}">{{ $fase->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-jet-button>Agregar</x-jet-button>
                </form>
            </div>

            @if (count($cultivo_fases))
            <div class="my-6">

                <div class="mt-5 mb-3">
                    <h3 class="h3">
                        Fases
                    </h3>
                </div>

                @foreach ($cultivo_fases as $cultivo_fase)
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="justify-between d-flex align-items-center">
                            <h4 class="h4 mb-0">
                                {{ $cultivo_fase->nombre }}
                                <!-- {{ $cultivo_fase->cultivo_fase_id }} -->
                            </h4>
                            <!-- {{$cultivo_fase->cultivo_id}} -->
                            <form action="{{ route('destroyCultivoFase') }}" method="POST">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="cultivo_fase_id" value="{{ $cultivo_fase->cultivo_fase_id }}">
                                <input type="hidden" name="cultivo_id" value="{{ $cultivo_fase->cultivo_id }}">
                                <button class="inline-block px-4 py-2.5 bg-red-600 text-white font-medium text-xs 
                            leading-tight uppercase rounded 
                            shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 
                            focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg 
                            transition duration-150 ease-in-out " type="submit">
                                    Eliminar
                                </button>

                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="justify-end d-flex align-center">
                                <livewire:agregar-insumo-modal :cultivo_fase_id="$cultivo_fase->cultivo_fase_id" />
                                <livewire:agregar-actividad-modal :cultivo_fase_id="$cultivo_fase->cultivo_fase_id"/>
                                <livewire:agregar-costos-modal />
                                <livewire:ver-cultivo-fase-modal :cultivo_fase_id="$cultivo_fase->cultivo_fase_id" />
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @endif

        </div>
    </div>

</x-app-layout>




{{-- {{$actividad}} --}}
{{-- {{$insumo}} --}}