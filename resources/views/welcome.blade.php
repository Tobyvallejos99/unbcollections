@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="flex flex-col items-center">
            <img src="{{ asset('https://unbcollections.com.ar/wp-content/uploads/2023/11/Logo_2_UNBCollections_-removebg-preview.png') }}" alt="UnbCollections Logo" class="mb-4">
            <p class="text-lg text-gray-700 mb-8">
                Bienvenido a UnbCollections. Esta es la dashboard de la aplicación para administradores donde se podra crear modificar y eliminar USUARIOS.
            </p>
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Ingresar
            </a>
        </div>
    </div>
@endsection
