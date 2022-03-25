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
    public function metodos ()
    {
        return $this->hasOne(Metodo::class, 'id', 'metodo_id');
    }
    public function alumnos ()
    {
        return $this->hasOne(Alumno::class, 'id', 'alumno_id');
    }
    public function phasc ()
    {
        return $this->hasOne(PhasC::class, 'id', 'periodo_has_cursos_id');
    }
    public function users ()
    {
        return $this->hasOne(User::class, 'id', 'creado_por');
    }
}
