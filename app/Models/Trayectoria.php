<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trayectoria extends Model
{
    use HasFactory;
    function jugador(){
        return $this->belongsTo(Jugador::class);
    }
    function equipo(){
        return $this->belongsTo(Equipo::class);
    }
}
