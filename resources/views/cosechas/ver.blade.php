<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Cosecha') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <div class="my-4">
                        <x-jet-label for="cultivo_id" value="{{ __('Cultivo Id')}}" />
                        <x-jet-input id="cultivo_id" class="block mt-1 w-full" type="integer" name="cultivo_id" :value="old('cultivo_id', $cosecha->cultivo_id)" readonly />
                    </div>
                    <div class="my-4">
                        <x-jet-label for="fecha" value="{{ __('Fecha')}}" />
                        <x-jet-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha', $cosecha->fecha)" readonly />
                    </div>
                    <div class="my-4">
                        <x-jet-label for="cantidad" value="{{ __('cantidad')}}" />
                        <x-jet-input id="cantidad" class="block mt-1 w-full" type="integer" name="cantidad" :value="old('cantidad', $cosecha->cantidad)" readonly />
                    </div>
                    <div class="my-4">
                        <x-jet-label for="user_id" value="{{ __('Usuario Id')}}" />
                        <x-jet-input id="user_id" class="block mt-1 w-full" type="integer" name="user_id" :value="old('user_id', $cosecha->user_id)" readonly />
                    </div>

                <div class="my-4 flex justify-center">
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{route('cosechas.index')}}">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>