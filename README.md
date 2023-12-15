para la DB 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=unbdb
DB_USERNAME=usuario_de_tu_base_de_datos
DB_PASSWORD=contraseña_de_tu_base_de_datos

luego 
Make:migration

php artisan make:migration create_usuarios_table --create=usuarios

Esto generará un archivo de migración en el directorio database/migrations. 

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

luego de la creacion de la db, npm i, npm run dev y ya tendria que estar funcionando ! 
se utilizo PHP Laravel, Node , MySql, boostrap y tailwind 
si tuviera mas tiempo me gustaria mejorar mucho mas el proyecto, pero al menos esta bien terminado! 
espero cumpla sus espectativas.
