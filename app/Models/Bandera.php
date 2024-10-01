<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bandera extends Model
{
    use HasFactory;
    function jugadores(){
        return $this->hasMany(Jugador::class, 'bandera_id', 'id');
    }
}
