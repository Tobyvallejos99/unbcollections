<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $telefono
 * @property $password
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'email' => 'required',
		'telefono' => 'required',
    'password' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','email','telefono','password'];



}
