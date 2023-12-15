@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Usuario
@endsection

@section('content')
    <section class="bg-gray-900 text-white py-8">
        <div class="container mx-auto">
            <div class="w-full md:w-2/3 lg:w-1/2 mx-auto">

                @includeif('partials.errors')

                <div class="bg-black shadow-md rounded px-10 pt-10 pb-10 mb-4">
                    <h2 class="text-2xl mb-6 font-bold">{{ __('Create') }} Usuario</h2>
                    <form method="POST" action="{{ route('usuarios.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('usuario.form')

                        <div class="flex items-center justify-between mt-8">
                            <a href="{{ route('usuarios.index') }}" class="text-gray-500 hover:text-gray-700">{{ __('Cancel') }}</a>
                        </div>
            </div>
        </div>
    </section>
@endsection

