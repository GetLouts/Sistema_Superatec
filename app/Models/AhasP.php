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
    public function alumnos ()
    {
        return $this->hasOne(Alumno::class, 'id', 'alumno_id');
    }
    public function periodos ()
    {
        return $this->hasOne(Periodo::class, 'id', 'periodo_id');
    }
    public function cursos ()
    {
        return $this->hasOne(Curso::class, 'id', 'curso_id');
    }
    public function creado_por ()
    {
        return $this->hasOne(User::class, 'id', 'creado_id');
    }
}
