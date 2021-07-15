<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edicion de checkbox
        </h2>
    </x-slot>


    <div class="w-10/12 mx-auto bg-white mt-10 p-10">

<button wire:click="example">boton</button>

        <div class="grid grid-cols-2 gap-4">
            <div class=" border-2 p-10">
                <div class="flex justify-end p-4 ">
                    <button class="bg-blue-500 px-2 py-1 font-bold text-white rounded focus:outline-none"
                        wire:click="CreateUser">Crear</button>
                </div>

                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Nombre
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                correo
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Tareas
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">

                                        @foreach($users as $key => $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$item->name}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$item->email}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                tareas
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                                    wire:click="edit( {{$item->id}} )">Edit</a>
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

            <div>


                @if($edit == true)

                <div class="flex flex-col items-center">

                    <div class="flex text-center">
                        <h1 class="mx-10"> nombre: {{$User->name}}</h1>
                        <h1 class="mx-10">email: {{$User->email}}</h1>
                    </div>

                    @foreach($tasks as $key => $item)
                    <div class="mt-10">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="candidates" name="candidates" type="checkbox"
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                    wire:model="SelectedArray.{{$item->id}}" value="{{$item->id}}">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="candidates" class="font-medium text-gray-700">{{$item->description}}</label>
                            </div>
                        </div>

                    </div>
                    @endforeach

                    <div class="flex justify-end p-4 ">
                        <button class="bg-blue-500 px-2 py-1 font-bold text-white rounded focus:outline-none"
                            wire:click="update">actualizar</button>
                    </div>
                </div>

                @endif
            </div>

        </div>

    </div>

</div>
