<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Importa el modelo User para la relación con pacientes
use App\Models\Medico; // Importa el modelo Medico para la relación con médicos
use App\Models\Servicio;

class Historial extends Model
{
    protected $table = 'historiales';

    protected $fillable = [
        'id_pacientes',
        'id_medicos',
        'id_servicios',
        'fecha',
        'descripcion'
    ];

    public function paciente(){
        return $this->belongsTo(User::class, 'id_pacientes');
    }

    public function medico(){
        return $this->belongsTo(Medico::class, 'id_medicos');
    }

    public function servicio(){
        return $this->belongsTo(Servicio::class, 'id_servicios');
    }
}
