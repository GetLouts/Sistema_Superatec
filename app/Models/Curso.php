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
    // Relacion uno a muchos
    public function alumnos(){
        return $this->hasMany('App\Models\Alumno');
    }
    public function users(){
        return $this->hasMany('App\Models\User');
    }
    //Relacion uno a muchos (inversa)
    public function ahasp(){
        return $this->belongsTo('App\Models\AhasP');
    }
    public function phasc(){
        return $this->belongsTo('App\Models\PhasC');
    }
}
