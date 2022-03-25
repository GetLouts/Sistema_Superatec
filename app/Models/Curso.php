<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'cursos',
        'descripcion',
        'cantidad_alumnos',
        'clases',
        'estado_id',
        'creado_por',
        'actualizado_por',
    ];
    public function estados ()
    {
        return $this->hasOne(Estado::class, 'id', 'estado_id');
    }
    public function user ()
    {
        return $this->hasOne(User::class, 'id', 'creado_por');
    }
}
