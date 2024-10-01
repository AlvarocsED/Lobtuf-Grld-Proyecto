<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoC extends Controller
{
    function __construct()
    {
        $this->middleware('auth');  
    }
    function vistaJugar(){
        return view('jugar/vistaJugar');
    }
}
