<x-app-layout>
    
    <style>

        .heading-primary-bottom {
            display: block;
            font-size: 18px;
            letter-spacing: 5px;
            font-weight: 700;
        }

        .header {
       
            background-image: linear-gradient(
                to right bottom, rgba(0, 0, 0, 0.397), 
                rgba(1, 1, 1, 0.655));
            background-size: cover;
        }

    </style>

<div class="header">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <br>
        <div class="overflow-hidden  shadow-xl sm:rounded-lg">
            <nav class="navbar bg-white">
                <div class="container-fluid">
                    <span class="heading-primary-bottom">Tareas o actividades</span>
                </div>
            </nav>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2">
                <div class="flex justify-end">
                    <a href="{{ route('actividads.create') }}">
                        <x-jet-button>Crear</x-jet-button>
                    </a>
                    <a href="{{ route('download-pdf-actividads') }}" target="_blank"> <button id="ex">Exportar a Pdf </button></a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">

                                <table class="min-w-full">
                                    
                                    <thead class="border-b">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Nombre
                                            </th>

                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Estado
                                            </th>

                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Fecha Realizacion
                                            </th>

                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Valor
                                            </th>

                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Observacion
                                            </th>

                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Acciones
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($actividads as $actividad)
                                            <tr class="border-b">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $actividad->nombre }}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $actividad->estado }}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $actividad->fecha_realizacion }}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $actividad->valor }}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $actividad->observacion }}
                                                </td>
                                                

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    
                                                    <a href="{{ route('actividads.show', $actividad) }}">
                                                        <x-jet-button>Ver</x-jet-button>
                                                    </a>

                                                    <a href="{{ route('actividads.edit', $actividad) }}">
                                                        <x-jet-button>Editar</x-jet-button>
                                                    </a>

                                                    <form action="{{route('actividads.destroy', $actividad)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                            <x-jet-danger-button>
                                                                Eliminar
                                                            </x-jet-danger-button>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</x-app-layout>
