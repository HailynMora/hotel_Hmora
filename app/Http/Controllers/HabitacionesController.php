<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showHabitaciones(){
        $habitacion= DB::table('habitaciones')
            ->join('precio', 'habitaciones.precio', '=', 'precio.id')
            ->orderBy('numero', 'asc')
            ->get();
        return view('servicios.habitaciones', ['habitaciones' => $habitacion]);
    }
}
