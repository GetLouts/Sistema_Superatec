<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhasC extends Model
{
    protected $fillable = [
        'periodo_id',
        'curso_id',
        'creado_por',
        'actualizado_por',
    ];
}
