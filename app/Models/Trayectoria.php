<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trayectoria extends Model
{
    use HasFactory;
    function bandera(){
        return $this->belongsTo(Bandera::class, 'bandera_id', 'id');
    }
    function equipo(){
        return $this->belongsTo(Equipo::class, 'equipo_id', 'id');
    }
}
