<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'telefono',
        'telefono_local',
        'direccion',
        'correo',
        'nivel_de_estudio',
        'fecha_nac',
        'comunidad',
        'pago',
        'metodo_pago',
        'numero_referencia',
        'patrocinador',
        'fecha_registro',
        'estado',
    ];
    public function cursos ()
    {
        return $this->hasOne(Curso::class, 'id', 'curso');
    }
    public function estados ()
    {
        return $this->hasOne(Estado::class, 'id', 'estado');
    }
}
