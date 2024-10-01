<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;
    function usuario(){
        return $this->belongsTo(User::class, 'partida_id', 'id');
    }
    function preguntas(){
        return $this->hasMany(Pregunta::class, 'pregunta_id', 'id');
    }
}
