<?php

namespace App\Http\Controllers;

use App\Models\Bandera;
use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JuegoC extends Controller
{

    function __construct()
    {
        $this->middleware('auth');  
    }
    function vistaJugar(){
        //Obtener las partidas del usuarrio
        $partidas = Partida::all();
        return view('jugar/vistaJugar',compact('partidas'));
    }
    function vistaJuegoFinal(){
        //Crear una partida nueva para el usuario logueado
        //Crear un objeto partida y rellenar los atributos
        //Hacer save del objeto partida 
        $p = new Partida();
        $p->user_id = Auth::user()->id;
        $p->puntos=0;
        $p->tiempo=0;
        $p->finalizado=false;
        $p->save();
       
        
        //Seleccionar 3 banderas al azar
        $banderas = DB::table('banderas')->select('*', DB::raw('rand() as num'))->orderBy('num')->limit(3)->get();

        //Seleccionar 3 equipos al azar
          $equipos = DB::table('equipos')->select('*', DB::raw('rand()  as num'))->orderBy('num')->limit(3)->get();

        //Cargar jugadores para el datalist
        $jugadores = Jugador::all();
        //Crear partida
        return view('jugar/vistaJuegoFinal',compact('banderas','equipos','jugadores'));
    }



}
       

