<?php

namespace app\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioC extends Controller
{
    function vistaLogin(){
        return view('login/vistaLogin');
    }
    function validarLogin(Request $request){
        //VAlidar si rellena email y constraseña
        $request->validate([
             "username"=>"required",
             "password"=>"requlired"
        ]);
        $credenciales=["username"->$request->email,
        "password"->$request->passwoord];
        $recordar=$request->has("recordar");
        if (Auth :: attempt($credenciales, $recordar)) {
            $request->session()->regenerate();
            return redirect()->intended("lobtuf");
        }
        else{
            return back()->with("mensaje", "Email o contraseña no válido");
        }
    }
    function vistaRegistro(){
        return view('login/vistaRegistro');
    }
    function crearUsuario(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required | unique:App\Models\User,email',
            'password'=>'required',
            'password2'=>'required|same:password' 
           ]);
           $u=new User();
           $u->name=$request->name;
           $u->email=$request->email;
           $u->password= Hash::make($request->password);
           $u->puntos=0;
           if ($u->save()){
            Auth::login($u);
            return redirect(route("vistaLogin"));
           }
           else{
            return back()->with("mensaje", "Se ha producido un error en el registro");
           }
           
           
    }
}
