<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Medico extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'medicos'; // Define el guard específico para médicos

    protected $fillable = [
        'nombre_apellido',
        'ci',
        'correo',
        'telefono',
        'password',
        // Otros campos del modelo de médico
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
