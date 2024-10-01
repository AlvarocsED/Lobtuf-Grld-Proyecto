<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    function trayectorias(){
        return $this->hasMany(Trayectoria::class, 'equipo_id', 'id');
    }
}
