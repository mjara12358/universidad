<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Materia') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div
                    class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

                    <div class="grid grid-cols-1 divide-y divide-gray-900 dark:divide-gray-200">
                        <div>
                            <div class="mb-2">
                                <section
                                    class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply sm:rounded-lg">
                                    @if (session('status'))
                                        <div id="session-status"
                                            class="bg-green-800 text-gray-200 dark:text-gray-200 text-center text-lg font-bold p-2 sm:rounded-lg">
                                            {{ session('status') }}</div>
                                    @endif
                                    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-10"
                                        style="max-height: 500px;">
                                        <h1
                                            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                                            {{ $materia->nombre }}</h1>
                                        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                                            {{ __('Semestre: ') }}{{ $materia->semestre }}{{ __(' - Creditos: ') }}{{ $materia->creditos }}
                                        </p>
                                        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                                            <div
                                                class="w-full max-w-sm bg-white bg-opacity-65 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:bg-opacity-85 dark:border-gray-700">
                                                <div class="flex justify-end px-4 pt-4">
                                                    {{-- <button id="dropdownButton" data-dropdown-toggle="dropdown"
                                                        class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                                                        type="button">
                                                        <span class="sr-only">Open dropdown</span>
                                                        <svg class="w-5 h-5" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 16 3">
                                                            <path
                                                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                        </svg>
                                                    </button> --}}
                                                </div>
                                                <div class="flex flex-col items-center pb-10">
                                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                                        src="{{ asset($materia->user->profile_photo_url) }}"
                                                        alt="{{ $materia->user->name }}'s profile photo" />
                                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                                        {{ $materia->user->name }}</h5>
                                                    <span
                                                        class="text-sm text-gray-800 dark:text-gray-400">{{ $materia->user->email }}</span>
                                                </div>
                                            </div>
        
                                        </div>
                                </section>
                            </div>
                        </div>
                        <div>
                            <div class="mt-2 mb-2">
                                <div
                                    class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex items-center justify-between">
                                    </div>
                                    <div class="flow-root">
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center">
                                                    <div class="flex items-center">
                                                        <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3 mr-3"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill="currentColor" d="M8 1V0v1Zm4 0V0v1Zm2 4v1h1V5h-1ZM6 5H5v1h1V5Zm2-3h4V0H8v2Zm4 0a1 1 0 0 1 .707.293L14.121.879A3 3 0 0 0 12 0v2Zm.707.293A1 1 0 0 1 13 3h2a3 3 0 0 0-.879-2.121l-1.414 1.414ZM13 3v2h2V3h-2Zm1 1H6v2h8V4ZM7 5V3H5v2h2Zm0-2a1 1 0 0 1 .293-.707L5.879.879A3 3 0 0 0 5 3h2Zm.293-.707A1 1 0 0 1 8 2V0a3 3 0 0 0-2.121.879l1.414 1.414ZM2 6h16V4H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v12h2V6h-2Zm0 12v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V6H0v12h2ZM2 6V4a2 2 0 0 0-2 2h2Zm16.293 3.293C16.557 11.029 13.366 12 10 12c-3.366 0-6.557-.97-8.293-2.707L.293 10.707C2.557 12.971 6.366 14 10 14c3.634 0 7.444-1.03 9.707-3.293l-1.414-1.414ZM10 9v2a2 2 0 0 0 2-2h-2Zm0 0H8a2 2 0 0 0 2 2V9Zm0 0V7a2 2 0 0 0-2 2h2Zm0 0h2a2 2 0 0 0-2-2v2Z"/>
                                                        
                                                        </svg>
                                                        <h5
                                                            class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            {{ __('Clases') }}</h5>
        
                                                        <div class="flex ml-4 pb-2 justify-center">
                                                            @role('Docente|Admin')
                                                                <button data-modal-target="agregar-modal"
                                                                    data-modal-toggle="agregar-modal" type="button"
                                                                    class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                    <svg class="mr-2 h-6 w-6 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    </svg>
                                                                    {{ __('Agregar') }}
                                                                </button>
                                                            @endrole
                                                        </div>
                                                    </div>
                                            </li>
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center ">
                                                    <div class="flex-1 min-w-0 ms-1">
                                                        <div
                                                            class="relative overflow-x-auto shadow-md sm:rounded-lg w-[100%] mx-auto">
                                                            {{-- @if (session('status'))
                                                                <div id="session-status"
                                                                    class="bg-green-800 text-gray-800 dark:text-gray-200 text-center text-lg font-bold p-2">
                                                                    {{ session('status') }}</div>
                                                            @endif --}}
                                                            <table
                                                                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                <thead class="text-xs text-gray-900 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-100">
                                                                    <tr>
                                                                        <th scope="col" class="px-6 py-3">ID</th>
                                                                        <th scope="col" class="px-6 py-3">Fecha
                                                                        </th>
                                                                        <th scope="col" class="px-6 py-3">Tema
                                                                        </th>
                                                                        <th scope="col" class="px-6 py-3">
                                                                            Actividad</th>
                                                                        <th scope="col" class="px-6 py-3">
                                                                            Asistencia</th>
                                                                        <th scope="col" class="px-6 py-3">Recursos
                                                                        </th>
                                                                        <th scope="col" class="px-6 py-3">Observaciones</th>
                                                                        <th scope="col" class="px-6 py-3">Estrategia</th>
                                                                        @role('Docente|Admin')
                                                                            <th scope="col" class="px-6 py-3">Acciones
                                                                            </th>
                                                                        @endrole
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($clases as $clase)
                                                                        <tr
                                                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                            <td scope="row"
                                                                                class="px-6 py- font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                {{ $clase->id }}</td>
                                                                            <td scope="row"
                                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                {{ $clase->fecha }}</td>
                                                                            <td scope="row"
                                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                {{ $clase->tema }}</td>
                                                                            <td scope="row"
                                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                {{ $clase->actividad }}</td>
                                                                            <td scope="row"
                                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                <div class="flex justify-center">
                                                                                    <button type="button"
                                                                                        data-modal-target="asistencia-modal"
                                                                                        data-modal-toggle="asistencia-modal"
                                                                                        onclick="claseAsistencia({{ $clase->id }}, {{ $asistencias }}, {{ $estudiantes }})"
                                                                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 bg-gray-200 dark:bg-gray-800 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-300 dark:focus:bg-gray-700">
                                                                                        <svg class="w-6 h-6" aria-hidden="true"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            fill="none" viewBox="0 0 21 21">
                                                                                            <path stroke="currentColor"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                            <td scope="row"
                                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                {{-- {{ pathinfo($clase->recursos, PATHINFO_BASENAME) }}|  --}}
                                                                                <a class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200"
                                                                                    target="_blank"
                                                                                    href="{{ asset($clase->recursos) }}">
                                                                                    {{ __('Ver') }}
                                                                                </a> | <a href="{{ asset($clase->recursos) }}"
                                                                                    download="{{ pathinfo($clase->recursos, PATHINFO_BASENAME) }}"
                                                                                    class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200">
                                                                                    {{ __('Descargar') }}
                                                                                </a></td>
                                                                                <td scope="row"
                                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                {{ $clase->observaciones }}</td>
                                                                                <td scope="row"
                                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                {{ $clase->estrategia }}</td>
                                                                            @role('Docente|Admin')
                                                                                <td scope="row"
                                                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                    <x-button-edit data-modal-target="editar-modal"
                                                                                        data-modal-toggle="editar-modal"
                                                                                        type="button" class="mr-1"
                                                                                        onclick="editarClase({{ json_encode($clase) }}, {{ $materias }})">
                                                                                    </x-button-edit>
                                                                                    <x-button-delete data-modal-target="delete-modal"
                                                                                        data-modal-toggle="delete-modal"
                                                                                        type="button"
                                                                                        onclick="eliminar({{ $clase->id }})">
                                                                                    </x-button-delete>
                                                                                    </form>
                                                                                </td>
                                                                            @endrole
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mt-2">
                                <div
                                    class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex items-center justify-between">
                                    </div>
                                    <div class="flow-root">
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center">
                                                    <div class="flex items-center">
                                                        <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3 mr-3"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill="currentColor" d="M8 1V0v1Zm4 0V0v1Zm2 4v1h1V5h-1ZM6 5H5v1h1V5Zm2-3h4V0H8v2Zm4 0a1 1 0 0 1 .707.293L14.121.879A3 3 0 0 0 12 0v2Zm.707.293A1 1 0 0 1 13 3h2a3 3 0 0 0-.879-2.121l-1.414 1.414ZM13 3v2h2V3h-2Zm1 1H6v2h8V4ZM7 5V3H5v2h2Zm0-2a1 1 0 0 1 .293-.707L5.879.879A3 3 0 0 0 5 3h2Zm.293-.707A1 1 0 0 1 8 2V0a3 3 0 0 0-2.121.879l1.414 1.414ZM2 6h16V4H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v12h2V6h-2Zm0 12v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V6H0v12h2ZM2 6V4a2 2 0 0 0-2 2h2Zm16.293 3.293C16.557 11.029 13.366 12 10 12c-3.366 0-6.557-.97-8.293-2.707L.293 10.707C2.557 12.971 6.366 14 10 14c3.634 0 7.444-1.03 9.707-3.293l-1.414-1.414ZM10 9v2a2 2 0 0 0 2-2h-2Zm0 0H8a2 2 0 0 0 2 2V9Zm0 0V7a2 2 0 0 0-2 2h2Zm0 0h2a2 2 0 0 0-2-2v2Z"/>
                                                        
                                                        </svg>
                                                        <h5
                                                            class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            {{ __('Asistencia') }}</h5>
                                                    </div>
                                            </li>
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center ">
                                                    <div class="flex-1 min-w-0 ms-1">
                                                        <div class="mt-1 flex flex-wrap gap-6 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                                                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                <thead class="text-xs text-gray-900 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-100">
                                                                    <tr>
                                                                        <th scope="col" class="px-6 py-3">ID</th>
                                                                        <th scope="col" class="px-6 py-3">Estudiante</th>
                                                                        @foreach ($clases as $clase)
                                                                            <th>{{ $clase->fecha }}</th>
                                                                        @endforeach
                                                                        @role('Docente|Admin')
                                                                            <th scope="col" class="px-6 py-3 text-center">Acciones</th>
                                                                        @endrole
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($estudiantes as $estudiante)
                                                                        <tr
                                                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                            <td scope="row"
                                                                                class="px-6 py- font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                {{ $estudiante->id }}</td>
                                                                            <td scope="row"
                                                                                class="px-6 py-4 flex items-center font-medium text-gray-900 whitespace-nowrap dark:text-white">                                 
                                                                                <img class="w-10 h-10 p-1 mr-4 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="{{ $estudiante->profile_photo_url }}" alt="Bordered avatar">
                                                                                <span class1="ml-2 text-gray-900 dark:text-gray-200">{{ $estudiante->name }}</span></td>
                                                                            @foreach ($clases as $clase)
                                                                                <td scope="row"
                                                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                    @php
                                                                                        $asistencia = $asistencias->first(function ($item) use (
                                                                                            $estudiante,
                                                                                            $clase,
                                                                                        ) {
                                                                                            return $item->idEstudiante === $estudiante->id &&
                                                                                                $item->idClase === $clase->id;
                                                                                        });
                                                                                    @endphp
                                                                                    @if ($asistencia)
                                                                                        @if ($asistencia->estado === 'Faltante')
                                                                                            <span
                                                                                                class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                                                                                <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                                                                                Faltante
                                                                                            </span>
                                                                                        @elseif ($asistencia->estado === 'Presente')
                                                                                            <span
                                                                                                class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                                                                                <span
                                                                                                    class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                                                                                Presente
                                                                                            </span>
                                                                                        @elseif ($asistencia->estado === 'Tarde')
                                                                                            <span
                                                                                                class="inline-flex items-center bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-green-300">
                                                                                                <span class="w-2 h-2 me-1 bg-blue-500 rounded-full"></span>
                                                                                                Tarde
                                                                                            </span>
                                                                                        @else
                                                                                            <!-- Aquí puedes manejar otros estados si es necesario -->
                                                                                            {{ $asistencia->estado }}
                                                                                        @endif
                                                                                    @else
                                                                                        <!-- Aquí puedes mostrar algún mensaje o dejar el espacio en blanco -->
                                                                                        {{ __('Sin estado') }}
                                                                                    @endif
                                                                                </td>
                                                                            @endforeach
                                                                            @role('Docente|Admin')
                                                                                <td class="text-center">
                                                                                    <x-button-edit data-modal-target="editasistencia-modal"
                                                                                        data-modal-toggle="editasistencia-modal" type="button"
                                                                                        onclick="editarAsis({{ $asistencia ?? 'null' }}, {{ $asistencia->user ?? 'null' }}, {{ $clases }}, {{ $asistencias }})">
                                                                                    </x-button-edit>
                                                                                </td>
                                                                            @endrole
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar modal -->
    <div id="agregar-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ __('Agregar Clase') }}
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="agregar-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('clases.store') }}" method="POST" enctype="multipart/form-data"
                    class="p-4 md:p-5">
                    @csrf
                    <div class="grid gap-4 mb-1 grid-cols-2">
                        <input type="hidden" name="idMateria" id="idMateria"
                            value="{{ $materia->id }}">
                        <div class="col-span-2">
                            <label for="fecha"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Fecha') }}</label>
                            <div class="relative ">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input type="date" id="fecha" name="fecha"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="fecha" required="">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="tema"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Tema') }}</label>
                            <input type="text" name="tema" id="tema"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder='Tematica' required="">
                        </div>
                        <div class="col-span-2">
                            <label for="actividad"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Actividad') }}</label>
                            <input type="text" name="actividad" id="actividad"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder='Actividades' required="">
                        </div>
                        <div class="col-span-2">
                            <label for="recursos"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Recursos') }}</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400"
                                aria-describedby="file_input_help" name="recursos" id="recursos" type="file" required="">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" name="recursos" id="recursos">
                                SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        </div>
                        <div class="col-span-2">
                            <label for="observaciones"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Observaciones') }}</label>
                            <input type="text" name="observaciones" id="observaciones"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder='Comentarios' required="">
                        </div>
                        <div class="col-span-2">
                            <label for="estrategia"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Estrategia') }}</label>
                            <input type="text" name="estrategia" id="estrategia"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder='Metodo' required="">
                        </div>
                    </div>
                    @foreach (['idMateria', 'fecha', 'tema', 'actividad', 'recursos', 'observaciones', 'estrategia'] as $campo)
                        @error($campo)
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    @endforeach

                    <button type="submit"
                        class="mt-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Agreagar Clase') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Eliminar-->
    <div id="delete-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="delete-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                        {{ __('Seguro de eliminar esta Clase!?') }}</h3>

                    <form id="delete-form" action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <button data-modal-hide="delete-modal" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            {{ __('Si, Eliminar') }}
                        </button>
                        <button data-modal-hide="delete-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">{{ __('Cancelar') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Editar modal -->
    <div id="editar-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ __('Editar Clase') }}
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="editar-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="editar-form" method="POST" enctype="multipart/form-data" class="p-4 md:p-5">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <input type="hidden" name="idMateria" id="edit-idMateria">
                        <div class="col-span-2">
                            <label for="fecha"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Fecha') }}</label>
                            <div class="relative ">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input type="date" id="edit-fecha" name="fecha"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="fecha">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="tema"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Tema') }}</label>
                            <input type="text" name="tema" id="edit-tema"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder='Tematica' required="">
                        </div>
                        <div class="col-span-2">
                            <label for="actividad"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Actividad') }}</label>
                            <input type="text" name="actividad" id="edit-actividad"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder='Actividades' required="">
                        </div>
                        <div class="col-span-2">
                            <label for="recursos" id="label-recursos"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Recursos') }}</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400"
                                aria-describedby="file_input_help" name="recursos" id="recursos" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" name="recursos"
                                id="edit-recursos">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        </div>
                        <div class="col-span-2">
                            <label for="observaciones"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Observaciones') }}</label>
                            <input type="text" name="observaciones" id="edit-observaciones"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder='Comentarios' required="">
                        </div>
                        <div class="col-span-2">
                            <label for="estrategia"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Estrategia') }}</label>
                            <input type="text" name="estrategia" id="edit-estrategia"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder='Metodo' required="">
                        </div>
                    </div>
                    @foreach (['materia', 'fecha', 'tema', 'actividad', 'recursos', 'observaciones', 'estrategia'] as $campo)
                        @error($campo)
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    @endforeach

                    <button type="submit"
                        class="mt-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="mr-2 h-5 w-5 text-gray-200" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                            <polyline points="17 21 17 13 7 13 7 21" />
                            <polyline points="7 3 7 8 15 8" />
                        </svg>
                        {{ __('Guardar') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Asistencia modal -->
    <div id="asistencia-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-3xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        @if (auth()->user()->hasRole('Docente'))
                            {{ __('Registrar Asistencia') }}
                        @else
                            {{ __('Ver Asistencia') }}
                        @endif
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="asistencia-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('asistencias.store') }}" method="POST" class="p-4 md:p-5">
                    @csrf
                    <div class="pt-6 pb-6 relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-900 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">Estudiante</th>
                                    <th scope="col" class="px-6 py-3">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <input type="hidden" name="idMateria" id="idMateria"
                                value="{{ $materia->id }}">
                                <input type="hidden" name="idClase" id="idClase">
                                @foreach ($estudiantes as $estudiante)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td scope="row"
                                            class="px-6 py- font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <input type="hidden" name="idEstudiante[]"
                                                value="{{ $estudiante->id }}">
                                            {{ $estudiante->id }}
                                        </td>
                                        <td scope="row"
                                            class="px-6 py- font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $estudiante->name }}
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <input type="hidden" name="idAsistencia[]"
                                                id="idAsistencia{{ $estudiante->id }}">
                                            <select name="estado[]" id="estado{{ $estudiante->id }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                @if (auth()->user()->hasRole('Estudiante|Directora'))
                                                onmousedown="return false;"
                                                @endif>
                                                <option value="Sin estado">Sin estado</option>
                                                <option value="Faltante">Faltante</option>
                                                <option value="Presente">Presente</option>
                                                <option value="Tarde">Tarde</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @foreach (['idMateria', 'idClase', 'idAsistencia', 'idEstudiante', 'estado'] as $campo)
                            @error($campo)
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        @endforeach
                    </div>
                    @role('Docente|Admin')
                        <button type="submit"
                            class="mt-4 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="mr-2 h-5 w-5 text-gray-200" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                                <polyline points="17 21 17 13 7 13 7 21" />
                                <polyline points="7 3 7 8 15 8" />
                            </svg>
                            {{ __('Guardar') }}
                        </button>
                    @endrole
                </form>

            </div>
        </div>
    </div>

    <!-- Edit Asistencia modal -->
    <div id="editasistencia-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-3xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ __('Modificar Asistencia') }}
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="editasistencia-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form id="edit-asistencia-form" method="POST" class="p-4 md:p-5">
                    @csrf
                    @method('PUT')
                    <div class="pt-6 pb-6 relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-900 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">Estudiante</th>
                                    @foreach ($clases as $clase)
                                        <th>{{ $clase->fecha }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <input type="hidden" name="idMateria" id="idMateria"
                                value="{{ $materia->id }}">
                                <input type="hidden" name="idEstudiante" id="inEstudiante">
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row" id="edit-idEstudiante"
                                        class="px-6 py- font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    </td>
                                    <td scope="row" id="edit-nombreEstudiante"
                                        class="px-6 py- font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    </td>
                                    @foreach ($clases as $clase)
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <input type="hidden" name="idAsistencia[]" id="editidAsistencia{{ $clase->id }}">
                                            <input type="hidden" name="idClase[]" id="editidClase{{ $clase->id }}">
                                            <select name="estado[]" id="edit-estado{{ $clase->id }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="Sin estado">Sin estado</option>
                                                <option value="Faltante">Faltante</option>
                                                <option value="Presente">Presente</option>
                                                <option value="Tarde">Tarde</option>
                                            </select>
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                        @foreach (['idMateria', 'idClase', 'idAsistencia', 'idEstudiante', 'estado'] as $campo)
                            @error($campo)
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        @endforeach
                    </div>
                    @role('Docente|Admin')
                        <button type="submit"
                            class="mt-4 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="mr-2 h-5 w-5 text-gray-200" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                                <polyline points="17 21 17 13 7 13 7 21" />
                                <polyline points="7 3 7 8 15 8" />
                            </svg>
                            {{ __('Guardar') }}
                        </button>
                    @endrole
                </form>

            </div>
        </div>
    </div>

    <script>
        function eliminar(id) {
            document.getElementById('delete-form').action = '/clases/' + id;
        }

        function editarClase(clase, materias) {

            document.getElementById('edit-idMateria').value = clase.idMateria;
            document.getElementById('edit-fecha').value = clase.fecha;
            document.getElementById('edit-tema').value = clase.tema;
            document.getElementById('edit-actividad').value = clase.actividad;
            document.getElementById('edit-observaciones').value = clase.observaciones;
            document.getElementById('edit-estrategia').value = clase.estrategia;
            var labelRecursos = document.getElementById('label-recursos');

            if (clase.recursos === '') {
                labelRecursos.innerText = "{{ __('Cargar Recursos') }}";
            } else {
                labelRecursos.innerText = "{{ __('Reemplazar Recursos: ') }}";
            }

            document.getElementById('editar-form').action = '/clases/' + clase.id;
        }

        function editarAsis(asistenciaSelec, estudiante, clases, asistencias) {

            var idEstudiante = document.getElementById('edit-idEstudiante');
            idEstudiante.textContent = asistenciaSelec.idEstudiante;

            var nombreEstudiante = document.getElementById('edit-nombreEstudiante');
            nombreEstudiante.textContent = estudiante.name;

            document.getElementById('inEstudiante').value = asistenciaSelec.idEstudiante;

            // Iterar sobre cada estudiante
            clases.forEach(function(clase) {
                var selectEstado = document.getElementById('edit-estado' + clase.id);
                var estadoSeleccionado = false; // Bandera para verificar si se seleccionó algún estado

                // Iterar sobre las asistencias para encontrar la del estudiante y clase específicos
                asistencias.forEach(function(asistencia) {
                    if (asistencia.idEstudiante === estudiante.id && asistencia.idClase === clase.id) {
                        // Seleccionar el valor de estado correspondiente
                        selectEstado.value = asistencia.estado;
                        estadoSeleccionado = true; // Se encontró un estado para este estudiante

                        // Establecer el valor del idAsistencia
                        document.getElementById('editidAsistencia' + clase.id).value = asistencia.id;
                        document.getElementById('editidClase' + clase.id).value = asistencia.idClase;

                    }
                });

                // Si no se seleccionó ningún estado, restablecer el selector
                if (!estadoSeleccionado) {
                    selectEstado.selectedIndex = 0; // Seleccione la primera opción (Faltante)
                }
            });

            document.getElementById('edit-asistencia-form').action = '/asistencias/' + asistenciaSelec.id;
        }

        setTimeout(function() {
            var sessionStatus = document.getElementById('session-status');
            if (sessionStatus) {
                sessionStatus.style.display = 'none';
            }
        }, 2000);

        function claseAsistencia(id, asistencias, estudiantes) {
            document.getElementById('idClase').value = id;

            // Iterar sobre cada estudiante
            estudiantes.forEach(function(estudiante) {
                var selectEstado = document.getElementById('estado' + estudiante.id);
                var estadoSeleccionado = false; // Bandera para verificar si se seleccionó algún estado

                // Iterar sobre las asistencias para encontrar la del estudiante y clase específicos
                asistencias.forEach(function(asistencia) {
                    if (asistencia.idEstudiante === estudiante.id && asistencia.idClase === id) {
                        // Seleccionar el valor de estado correspondiente
                        selectEstado.value = asistencia.estado;
                        estadoSeleccionado = true; // Se encontró un estado para este estudiante

                        // Establecer el valor del idAsistencia
                        document.getElementById('idAsistencia' + estudiante.id).value = asistencia.id;
                    }
                });

                // Si no se seleccionó ningún estado, restablecer el selector
                if (!estadoSeleccionado) {
                    selectEstado.selectedIndex = 0; // Seleccione la primera opción (Faltante)
                }
            });

        }
    </script>
</x-app-layout>
