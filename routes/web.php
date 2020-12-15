<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ReservasController;
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
Route::get('/', [HotelController::class, 'getIndex']);
//Hotel historia
Route::get('/hotel/historia', [HotelController::class, 'showHistoria']);
//hotel mision vision
Route::get('/hotel/mision-vision', [HotelController::class, 'showMision']);
//Hotel Ubicacion
Route::get('/hotel/ubicación', [HotelController::class, 'showUbicacion']);

//Servicios Habitaciones
Route::get('/servicios/habitaciones', [HabitacionesController::class, 'showHabitaciones']);
//Servicios eventos => parametros
Route::get('/servicios/eventos/{id}', function ($id = null) {
    return view('servicios.eventos')
    ->with('id',$id);
});
//reservas
Route::get('reservas', [ReservasController::class, 'getReservas']);
//contactos
Route::get('contacto',  [HotelController::class, 'showContactos']);
Route::get('/clientes/visualizar', [ClientesController::class, 'showClientes']);
Route::get('factura', [FacturacionController::class, 'getFactura']);
Route::get('consultas',  [HotelController::class, 'consulCliente']);
Route::get('conhabita',  [HotelController::class, 'habita']);







