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
    public function periodos ()
    {
        return $this->hasOne(Periodo::class, 'id', 'estado_id');
    }
    //Relacion uno a muchos
    public function cursos(){
        return $this->hasMany('App\Models\Curso');
    }
    public function users(){
        return $this->hasMany('App\Models\User');
    }
    //Relacion uno a muchos (inversa)
    public function mhasa(){
        return $this->belongsTo('App\Models\MhasA');
    }
}
