<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Historial;
use App\Models\Cita;
use App\Models\Medico;
use App\Models\Servicio;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $table = 'users';
     
     protected $fillable = [
        'name',
        'alergia',
        'email',
        'telefono',
        'fecha_nacimiento',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function historiales(){
        return $this->hasMany(Historial::class, 'id_pacientes');
    }
    public function citas(){
        return $this->hasMany(Cita::class, 'id_pacientes');
    }
    public function medico(){
        return $this->belongsTo(Medico::class, 'id_medicos');
    }
    public function servicio(){
        return $this->belongsTo(Servicio::class, 'id_servicios');
    }
}
