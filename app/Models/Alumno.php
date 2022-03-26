<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'telefono',
        'telefono_local',
        'direccion',
        'correo',
        'nivel_de_estudio',
        'fecha_nac',
        'comunidad',
        'pago',
        'metodo_pago',
        'numero_referencia',
        'patrocinador',
        'fecha_registro',
        'estado',
    ];

    
    //Relacion uno a uno
/* public function cursos ()
    {
        return $this->hasOne(Curso::class, 'id', 'curso');
    }
    public function metodo_pago ()
    {
        return $this->hasOne(Metodo::class, 'id', 'metodo_pago');
   }
*/
    public function estados ()
    {
    return $this->hasOne('App\Models\Estado');
    }
    //Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function metodo(){
        return $this->belongsTo('App\Models\Metodo');
    }
    public function curso(){
        return $this->belongsTo('App\Models\Curso');
    }
    public function ahasp(){
        return $this->belongsTo('App\Models\AhasP');
    }
    public function mhasa(){
        return $this->belongsTo('App\Models\MhasA');
    }
    
}
