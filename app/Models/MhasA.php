<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhasA extends Model
{
    protected $fillable = [
        'metodo_id',
        'alumno_id',
        'periodo_has_cursos_id',
        'creado_por',
        'actualizado_por',
    ];
}
