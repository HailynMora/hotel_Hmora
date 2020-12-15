<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function getIndex(){
        return view('principal');
    }

    public function showHistoria(){
        return view('hotel.historia');
    }

    public function showMision(){
        return view('hotel.vision');
    }

    public function showUbicacion(){
        return view('hotel.ubicación');
    }

    public function showContactos(){
        return view('contacto');
    }

    public function consulCliente(){
        $datos= DB::table('factura')
            ->join('cliente', 'cliente.id', '=', 'factura.cliente')
            ->orderBy('nombre')
            ->get();
        return view('consultas',[
            'cliente' => $datos
        ]);
    }
    
    public function habita(){
        $sencilla= DB::table('precio')
            ->where('tipo','like','%Sencilla%')
            ->count();
        $doble= DB::table('precio')
            ->where('tipo','like','%Doble%')
            ->count();
        $triple= DB::table('precio')
            ->where('tipo','like','%Triple%')
            ->count();
        $suite= DB::table('precio')
            ->where('tipo','like','%Suite%')
            ->count();
        return view('conhabita',[
                                'senci' => $sencilla,
                                'doble' => $doble,
                                'triple' => $triple,
                                'suite' => $suite]);
    }
}
