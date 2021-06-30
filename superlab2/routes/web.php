<?php

use App\Http\Controllers\ContactosController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\SeccionesController;
use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\DB;
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

Route::get('/superlab2/web', function () {
    $servicios = DB::table('servicios')->get();
    $inicio = DB::table('secciones')->where('seccion', 'inicio')->first();
    $somos = DB::table('secciones')->where('seccion', 'somos')->first();
    $servicio = DB::table('secciones')->where('seccion', 'servicio')->first();
    $galeria = DB::table('secciones')->where('seccion', 'galeria')->first();
    $contacto = DB::table('secciones')->where('seccion', 'contacto')->first();

    $galerias = DB::table('galerias')->get();
    return view('inicio', ['servicios' => $servicios, 'inicio' => $inicio, 'somos' => $somos, 'servicio' => $servicio, 'galeria' => $galeria, 'contacto' => $contacto, 'galerias' => $galerias]);
});


Route::get('/superlab2/admin', function () {
    $servicios = DB::table('servicios')->get();
    $inicio = DB::table('secciones')->where('seccion', 'inicio')->first();
    $somos = DB::table('secciones')->where('seccion', 'somos')->first();
    $servicio = DB::table('secciones')->where('seccion', 'servicio')->first();
    $galeria = DB::table('secciones')->where('seccion', 'galeria')->first();
    $contacto = DB::table('secciones')->where('seccion', 'contacto')->first();
    $contactos = DB::table('contactos')->get();
    $galerias = DB::table('galerias')->get();
    return view('administrador', ['servicios' => $servicios, 'inicio' => $inicio, 'somos' => $somos, 'servicio' => $servicio, 'galeria' => $galeria, 'contacto' => $contacto,'contactos' => $contactos, 'galerias' => $galerias]);

});

Route::resource('servicios', ServiciosController::class);
Route::resource('secciones', SeccionesController::class);
Route::resource('contactos', ContactosController::class);
Route::resource('galeria', GaleriaController::class);
