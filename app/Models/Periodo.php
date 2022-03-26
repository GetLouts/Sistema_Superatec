<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = [
        'nombre_perido',
        'creado_por',
        'actualizado_por',
        'estado_id',
    ];
    // Relacion uno a uno
    public function estados ()
    {
        return $this->hasOne(Estado::class, 'id', 'estado_id');
    }
    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
