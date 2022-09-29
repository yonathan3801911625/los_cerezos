<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Actividad') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <form action="{{ route('actividads.store') }}" method="post">
                    @csrf
                    <div class="my-4">
                        <x-jet-label for="nombre">Nombre</x-jet-label>
                        <x-jet-input type="text" id="nombre" name="nombre" class="w-full" />
                    </div>
                    <div class="my-4">
                        <x-jet-label for="estado">Estado</x-jet-label>
                        <select name="estado" id="estado">
                            <option value="finalizado">Finalizado</option>
                            <option value="en proceso">En proceso</option>
                            <option value="pendiente">Pendiente</option>
                        </select>
                    </div>
                    <div class="my-4">
                        <x-jet-label for="fecha_realizacion">Fecha Realizacion</x-jet-label>
                        <x-jet-input type="date" id="fecha_realizacion" name="fecha_realizacion" class="w-full" />
                    </div>
                    <div class="my-4">
                        <x-jet-label for="valor">Valor</x-jet-label>
                        <x-jet-input type="integer" id="valor" name="valor" class="w-full" />
                    </div>
                    <div class="my-4">
                        <x-jet-label for="observacion">Observacion</x-jet-label>
                        <x-jet-input type="longtext" id="observacion" name="observacion" class="w-full" />
                    </div>

                    <x-jet-button>Guardar</x-jet-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>