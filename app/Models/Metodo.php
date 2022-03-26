<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodo extends Model
{
    protected $fillable = [
        'metodo_pago',
        'creado_por',
        'actualizado_por',
    ];

    //Relacion uno a muchos 
    public function alumnos(){
        return $this->belongsToMany('App\Models\Alumno');
    }
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
