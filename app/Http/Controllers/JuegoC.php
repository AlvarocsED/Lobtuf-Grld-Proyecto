<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;

class JuegoC extends Controller
{
    function __construct()
    {
        $this->middleware('auth');  
    }
    function vistaJugar(){
        //Obtener las partidas del usuarrio
        return view('jugar/vistaJugar',compact('partidas'));
    }
    function vistaJuegoFinal(){
        //Crear una partida nueva para el usuario logueado
        //Crear un objeto partida y rellenar los atributos
        //Hacer save del objeto partida 
        return view('jugar/vistaJuegoFinal');
    }
}
