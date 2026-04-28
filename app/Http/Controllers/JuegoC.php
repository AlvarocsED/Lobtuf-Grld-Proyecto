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
    private $equipos, $banderas, $tablero;
    function __construct()
    {
        $this->middleware('auth');
    }
    function vistaJugar()
    {
        //Obtener las partidas del usuarrio
        $partidas = Partida::all();
        return view('jugar/vistaJugar', compact('partidas'));
    }
    function vistaJuegoFinal()
    {
        //Crear una partida nueva para el usuario logueado
        //Crear un objeto partida y rellenar los atributos
        //Hacer save del objeto partida 
        $p = new Partida();
        $p->user_id = Auth::user()->id;
        $p->puntos = 0;
        $p->tiempo = 0;
        $p->finalizado = false;
        $p->save();


        //Seleccionar 3 banderas al azar
        $banderas = DB::table('banderas')->select('*', DB::raw('rand() as num'))->orderBy('num')->limit(3)->get();
        //$this->banderas = $banderas;
        //Seleccionar 300 equipos al azar
        $equipos = DB::table('equipos')->select('*', DB::raw('rand()  as num'))->orderBy('num')->limit(3)->get();
        //$this->equipos = $equipos;

        $tablero = array();
        //Idenficar combinaciones en las que no hay jugador y las posibles soluciones
        for ($i = 0; $i < 3; $i++) { //equipos
            for ($j = 0; $j < 3; $j++) { //banderas
                $soluciones = $this->obtener($equipos[$i]->id, $banderas[$j]->id);
                if(empty($soluciones)){
                    $tablero[$i][$j]='X';
                }else{
                    $tablero[$i][$j]=$soluciones;
                }                
            }
        }
        //Cargar jugadores para el datalist
        $jugadores = DB::table('jugadors')->select('id', DB::raw("concat_ws(' ', nombre, apellido)  as nombre"))->orderBy('nombre')->get();
        //Crear partida
        return view('jugar/vistaJuegoFinal', compact('banderas', 'equipos', 'jugadores','tablero','p'));
    }

    function comprobar(Request $request)
    {
        if ($request->probar != null) {
            //Comprobar respuesta
            $id_jugador = $request->id_jugador;
        }
        if ($request->acabar != null) {
            //rellenar tabla
        }
    }
    function obtener($equipo, $bandera){
        $resultado = array();
        $tmp = DB::table('trayectorias')
        ->join('jugadors', 'jugador_id', '=', 'jugadors.id')
        ->select('jugadors.*')
        ->where('equipo_id',$equipo)
        ->where('bandera_id',$bandera)
        ->get();
        foreach($tmp as $t){
            $resultado[]=$t;
        }
        return $resultado;
    }
    function actualizarTiempo(Request $request){

        try {
            //Validar que pasamos el id de la partida
            $request->validate(['id'=>'required']);
           $partida = Partida::find($request->id);
           if($partida!=null){
                $partida->finalizado = true;
                $partida->tiempo= time()-strtotime($partida->created_at);//Tiempo en minutos.
                $partida->save();
                return response()->json([
                    'ok' => true,
                    'mensaje' => 'Partida finalizada'
                ]);
           }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    function actualizarPuntos(Request $request){

        try {
            //Validar que pasamos el id de la partida
           $request->validate(['id'=>'required','puntos'=>'required']);
           $partida = Partida::find($request->id);
           if($partida!=null){
                $partida->puntos = $request->puntos;
                $partida->save();
                return response()->json([
                    'ok' => true,
                    'mensaje' => 'Puntos actualizados'
                ]);
           }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function comprobarIMG(){
        $banderas = Bandera::all();
        $equipos = Equipo::all();
        $jugadores = Jugador::all();
        
    }
}