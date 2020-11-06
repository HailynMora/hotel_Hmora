<?php

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
//raiz
Route::get('/', function () {
    return view('principal');
});
//Hotel historia
Route::get('/hotel/historia', function () {
    return view('hotel.historia');
});
//hotel mision vision
Route::get('/hotel/vision', function () {
    return view('hotel.vision');
});
//Hotel Ubicacion
Route::get('/hotel/ubicación', function () {
    return view('hotel.ubicación');
});

//Servicios Habitaciones
Route::get('/servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});
//Servicios eventos => parametros
Route::get('/servicios/eventos/{id}', function ($id = null) {
    return view('servicios.eventos')
    ->with('id',$id);
});
//reservas
Route::get('reservas', function () {
    return view('reservas.reservas');
});
//contactos
Route::get('contacto', function () {
    return view('contacto');
});








