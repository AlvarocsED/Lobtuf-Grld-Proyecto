<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    function trayectorias(){
        return $this->hasMany(Trayectoria::class, 'jugador_id', 'id');
    }
    function solucionPreguntaS(){
        return $this->hasMany(solucionPregunta::class, 'jugador_id', 'id');
    }
    function banderad(){
        return $this->belongsTo(Bandera::class, 'bandera_id', 'id');
    }
}
