<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('password');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
