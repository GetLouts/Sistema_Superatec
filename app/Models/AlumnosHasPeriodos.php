<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnosHasPeriodos extends Model
{
    protected $fillable = [
        'alumnos_id',
        'periodo_id',
        'curso_id',
        'creado_por',
        'actualizado_por',
    ];
    //Relacion inversa 
    public function alumno(){
        return $this->belongsTo('App\Models\Alumno', 'id');
    }
    public function periodo(){
        return $this->belongsTo('App\Models\Periodo');
    }
    public function curso(){
        return $this->belongsTo('App\Models\Curso');
    }
    //Relacion uno a muchos
    public function asistencias(){
        return $this->hasMany('App\Models\Asistencia');
    }
    /**
     * Lo mismo con el creado y editado. Pertenecen a un usuario, el que lo crea\edita
     * es dueño del registro
     */
    public function creadoPor(){
        return $this->belongsTo('App\Models\User', 'creado_por');
    }
}
