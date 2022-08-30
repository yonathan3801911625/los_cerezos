<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear fase') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <form action="{{ route('fases.store') }}" method="post">
                    @csrf
                    <div class="my-1">
                        <x-jet-label for="nombre">Nombre</x-jet-label>
                        <x-jet-input type="text" id="nombre" name="nombre" class="w-full" />
                    </div>
                    <x-jet-button>Guardar</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
