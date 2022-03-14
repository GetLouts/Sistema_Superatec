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
        'edad',
        'comunidad',
        'curso',
        'pago',
        'metodo_pago',
        'fecha_pago',
        'numero_referencia',
        'patrocinador',
        'fecha_registro',
        'estado',
    ];
}
