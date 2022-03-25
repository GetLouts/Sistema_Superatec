<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'alumnos_has_periodos_id',
        'creado_por',
        'actualizado_por',
    ];
}
