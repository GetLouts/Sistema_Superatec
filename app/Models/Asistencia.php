<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'alumnos_has_periodos_id',
        'creado_por',
        'actualizado_por',
    ];
    //Relacion uno a muchos
    public function ahasp(){
        return $this->hasMany('App\Models\AhasP');
    }
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
