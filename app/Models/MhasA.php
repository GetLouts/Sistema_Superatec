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

    // Relacion uno a muchos
    public function metodos(){
        return $this->hasMany('App\Models\Metodo');
    }
    public function alumnos(){
        return $this->hasMany('App\Models\Alumno');
    }
    public function phasc(){
        return $this->hasMany('App\Models\PhasC');
    }
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
