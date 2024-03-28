@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Dashboard' ) }}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                    <div class="container">
                        <h2>AGENDA OF USERS</h2>
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>E-Mail</th>
                                    <th>Telefone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Carlos Juarez</td>
                                    <td>carlos.juarez@gmail.com</td>
                                    <td>999999999</td>
                                    <td>
                                        <i @click="showModal = true" class="icon" data-icon="adduser" data-width="16" data-height="16"></i>
                                        <i class="icon" data-icon="edit" data-width="16" data-height="16"></i>
                                        <i class="icon" data-icon="trash" data-width="16" data-height="16"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Ventana emergente para crear un nuevo registro 
            <div class="fixed inset-0 overflow-y-auto" x-show="showModal" x-cloak>
                <div class="flex items-center justify-center min-h-screen">
                    <div class="bg-white w-1/2 p-8 rounded shadow-lg">
                     Contenido del formulario para crear un nuevo registro 
                        <form action="{{ route('agenda.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="block text-gray-700 font-bold mb-2">Título:</label>
                                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded" placeholder="Título del evento">
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
                                <textarea name="description" id="description" class="w-full px-3 py-2 border rounded" placeholder="Descripción del evento"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="button" @click="showModal = false" class="px-4 py-2 text-gray-600">Cancelar</button>
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            FIN BLOQUE -->
        </div>
    </div>
</div>
@endsection
