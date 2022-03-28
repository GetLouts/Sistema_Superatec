<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required',
    ];

    protected $fillable=['title','descripcion','start','end'];

    //Relacion uno a muchos
    public function asistencia(){
        return $this->hasMany('App\Models\Asistencia');
    }
    //Relacion Inversa
    public function periodoshascursos(){
        return $this->belongsTo('App\Models\PeriodosHasCursos');
    }
}
