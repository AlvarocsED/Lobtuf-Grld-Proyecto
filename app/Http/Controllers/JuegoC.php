<?php

namespace App\Http\Controllers;

use App\Models\Bandera;
use App\Models\Equipo;
use App\Models\Partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

define ('MIN_ID_BANDERA',1);
define ('MAX_ID_BANDERA',29);

define ('MIN_ID_ESCUDOS',1);
define ('MAX_ID_ESCUDOS',16);
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
        $p = new Partida();
        $p->user_id = Auth::user()->id;
        $p->puntos=0;
        $p->tiempo=0;
        $p->finalizado=false;
        $p->save();
        //Crear un objeto partida y rellenar los atributos
        //Hacer save del objeto partida 
        
        //Seleccionar 3 banderas al azar
       /* $arrayIDs=array();
        $numBanderas=0;
        do {
            $id= rand(MIN_ID_BANDERA, MAX_ID_BANDERA);
            if(!in_array($id,$arrayIDs)){
                $arrayIDs[]=$id;
                $numBanderas++;
            }
        }while($numBanderas<3);
        //REcuperar banderas elegidas
        $banderas[]=Bandera::find($arrayIDs[0]);
        $banderas[]=Bandera::find($arrayIDs[1]);
        $banderas[]=Bandera::find($arrayIDs[2]);*/
        $banderas = DB::table('banderas')->select('*', DB::raw('rand() as num'))->orderBy('num')->limit(3)->get();


        //Seleccionar 3 equipos al azar
        /*$arrayIDs=array();
        $numEscudo=0;
        do{
            $id=rand(MIN_ID_ESCUDOS, MAX_ID_ESCUDOS);
            if(!in_array($id,$arrayIDs)) {
                $arrayIDs[]=$id;
                $numEscudo++;
            }
        }while($numEscudo<3);
          $equipos[]=Equipo::find($arrayIDs[0]);
          $equipos[]=Equipo::find($arrayIDs[1]);
          $equipos[]=Equipo::find($arrayIDs[2]);*/
          $equipos = DB::table('equipos')->select('*', DB::raw('rand()  as num'))->orderBy('num')->limit(3)->get();

           //Crear partida
        return view('jugar/vistaJuegoFinal',compact('banderas','equipos'));
    }



}
       

