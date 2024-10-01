<?php

use App\Http\Controllers\UsuarioC;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::controller(UsuarioC::class)->group(
    function(){
        Route::get('login', 'vistaLogin')->name('vistaLogin');
        Route::post('login', 'validarLogin')->name('validarLogin');
        Route::get('registro', 'vistaRegistro')->name('vistaRegistro');
        Route::post('registro', 'crearUsuario')->name('crearUsuario');
    }
);