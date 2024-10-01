<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    function soluciones(){
        return $this->hasMany(solucionPregunta::class, 'pregunta_id', 'id');
    }
    function partidas(){
        return $this->belongsTo(Partida::class, 'partida_id', 'id');
    }
}
