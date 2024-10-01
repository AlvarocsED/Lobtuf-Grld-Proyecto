<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solucionPregunta extends Model
{
    use HasFactory;
    function pregunta(){
        return $this->belongsTo(Pregunta::class, 'pregunta_id', 'id');
    }
    function jugadores(){
        return $this->belongsTo(Jugador::class, 'jugador_id', 'id');
    }
}
