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
    public function users ()
    {
        return $this->hasOne(User::class, 'id', 'creado_por');
    }
}
