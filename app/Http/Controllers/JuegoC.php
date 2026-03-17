<?php

namespace App\Http\Controllers;

use App\Models\Bandera;
use App\Models\Partida;
use Illuminate\Http\Request;

define ('MIN_ID_BANDERA',1);
define ('MAX_ID_BANDERA',29);

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
        
        //Seleccionar 3 banderas al azar
        $arrayIDs=array();
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
        $banderas[]=Bandera::find($arrayIDs[2]);


        //Seleccionar 3 equipos al azar
        $equipos=array();



        //Crear partida
        return view('jugar/vistaJuegoFinal',compact('banderas','equipos'));
    }
}
