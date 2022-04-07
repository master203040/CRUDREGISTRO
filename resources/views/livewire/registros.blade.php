
<x-slot name="header">
    <h1 class="text-gray-900">Datos de Clientes</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif


        <button wire:click="crear()" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 my-3 border border-8 rounded-md " >Crear Cliente</button>
        @if($modal)
            @include('livewire.crear')
        @endif

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">NOMBRE</th>
                <th class="px-4 py-2">IMAGEN</th>
                <th class="px-4 py-2">CEDULA</th>
                <th class="px-4 py-2">CORREO</th>
                <th class="px-4 py-2">TELEFONO</th>
                <th class="px-4 py-2">OBSERVACIONES</th>
                <th class="px-4 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
            <tr>
                <td class="border px-4 py-2">{{$registro->id}}</td>
                <td class="border px-4 py-2">{{$registro->nombre}}</td>
                <td class="border px-4 py-2">{{$registro->imagen}}</td>
                <td class="border px-4 py-2">{{$registro->cedula}}</td>
                <td class="border px-4 py-2">{{$registro->correo}}</td>
                <td class="border px-4 py-2">{{$registro->telefono}}</td>
                <td class="border px-4 py-2">{{$registro->observaciones}}</td>
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$registro->id}})" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md ">Editar</button>
                    <button wire:click="borrar({{$registro->id}})" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md ">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>







{{-- <x-slot name="header">
    <h1 class="text-gray-900">Registro de Clientes</h1>
</x-slot>

<div class="py-12">
    <div class="max-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:round-lg px-4 py-4">

            <button wire:click="crear()" class="bg-indigo-500 hover:indigo-600 text-white font-bold py-2 px-4 my-3 border border-8">Crear Cliente</button>
               @if ($modal)
                    @include("livewire.crear")
               @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <td class="px-4 py-2">ID</td>
                        <td class="px-4 py-2">NOMBRE</td>
                        <td class="px-4 py-2">IMAGEN</td>
                        <td class="px-4 py-2">CEDULA</td>
                        <td class="px-4 py-2">CORREO</td>
                        <td class="px-4 py-2">TELEFONO</td>
                        <td class="px-4 py-2">OBSERVACIONES</td>
                        <td class="px-4 py-2">ACCION</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <td class="border px-4 py-2">{{$registro->id}}</td>
                        <td class="border px-4 py-2">{{$registro->nombre}}</td>
                        <td class="border px-4 py-2">{{$registro->imagen}}</td>
                        <td class="border px-4 py-2">{{$registro->cedula}}</td>
                        <td class="border px-4 py-2">{{$registro->correo}}</td>
                        <td class="border px-4 py-2">{{$registro->telefono}}</td>
                        <td class="border px-4 py-2">{{$registro->observaciones}}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
