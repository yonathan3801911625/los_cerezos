<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cultivo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                
                <livewire:agregar-cosecha-modal  :cultivo_id="$cultivo->id" />
                <a href="{{ route('cosechas.index') }}">

                    <x-jet-button>Ver cosechas</x-jet-button>
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <form action="{{ route('cultivos.updateCultivo', $cultivo) }}" method="post">
                        @method('PUT')
                        @include('cultivos.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
