@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? __('Show Usuario') }}
@endsection

@section('content')
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto">
            <div class="w-full md:w-2/3 lg:w-1/2 mx-auto">

                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-2xl mb-6 font-bold">{{ __('  *Usuario*') }}</h2>
                        <hr>
                        <a href="{{ route('usuarios.index') }}" class= "btn btn-primary m-1">
                            {{ __('Back') }}
                        </a>
                    </div>

                    <div class="mb-4">
                        <div class="mb-4">
                            <strong class="block text-gray-700">Nombre:</strong>
                            <span class="text-gray-900">{{ $usuario->nombre }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Apellido:</strong>
                            <span class="text-gray-900">{{ $usuario->apellido }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Email:</strong>
                            <span class="text-gray-900">{{ $usuario->email }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Telefono:</strong>
                            <span class="text-gray-900">{{ $usuario->telefono }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Contraseña:</strong>
                            <span class="text-gray-900">{{ $usuario->password }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
