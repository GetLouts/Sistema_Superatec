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
    // Relacion uno a muchos
    public function alumnos(){
       return $this->hasMany('App\Models\Alumno');
    }
    //Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function mhasa(){
        return $this->belongsTo('App\Models\MhasA');
    }
}
