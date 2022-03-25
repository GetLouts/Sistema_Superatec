<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AhasP extends Model
{
    protected $fillable = [
        'alumno_id',
        'periodo_id',
        'curso_id',
        'creado_por',
        'actualizado_por',
    ];
}
