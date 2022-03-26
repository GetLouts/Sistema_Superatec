<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//Spatie
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // Relacion uno a muchos
    public function alumnos(){
        return $this->hasMany('App\Models\Alumno');
    }
    public function metodos(){
        return $this->hasMany('App\Models\Metodo');
    }
    
    // Relacion uno a muchos (inversa)
    public function ahasp(){
        return $this->belongsTo('App\Models\AhasP');
    }
    public function asistencia(){
        return $this->belongsTo('App\Models\Asistencia');
    }
    public function curso(){
        return $this->belongsTo('App\Models\Curso');
    }
    public function mhasa(){
        return $this->belongsTo('App\Models\MhasA');
    }
    public function phasc(){
        return $this->belongsTo('App\Models\PhasC');
    }
}
