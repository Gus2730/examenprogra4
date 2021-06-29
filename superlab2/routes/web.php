<?php

use App\Http\Controllers\ContactosController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\SomosController;
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

Route::get('/web/', function () {
    $servicios = DB::table('servicios')->get();
    $inicios = DB::table('inicios')->first();
    $somos = DB::table('somos')->first();
    return view('inicio',['servicios' => $servicios,'inicios' => $inicios, 'somos' => $somos]);
});
Route::get('/', function () {
    $servicios = DB::table('servicios')->get();
    $inicios = DB::table('inicios')->first();
    $somos = DB::table('somos')->first();
    return view('inicio',['servicios' => $servicios,'inicios' => $inicios, 'somos' => $somos]);
});

Route::get('/admin/', function () {
    return view('administrador');
});

Route::resource('employees', EmployeeController::class);
Route::resource('servicios', ServiciosController::class);
Route::resource('inicio', InicioController::class);
Route::resource('somos', SomosController::class);
Route::resource('contactos', ContactosController::class);
Route::resource('galeria', GaleriaController::class);