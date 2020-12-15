<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habita = [
            [
                'descripcion'=>'Habitacion Estandar sencilla, cuenta con baño privado',
                'numCamas'=>1,
                'foto'=>'1.png',
                'precio'=>1,
            ],
            [
                'descripcion'=>'Habitacion Estandar doble, cuenta con baño privado',
                'numCamas'=>2,
                'foto'=>'2.png',
                'precio'=>2,
            ],
            [
                'descripcion'=>'Habitacion Estandar triple, cuenta con baño dos privado',
                'numCamas'=>3,
                'foto'=>'3.png',
                'precio'=>3,
            ],
            [
                'descripcion'=>'Habitacion Ejecutiva Sencilla, amplia, moderna, cuenta con baño privado',
                'numCamas'=>1,
                'foto'=>'4.png',
                'precio'=>4,
            ],
            [
                'descripcion'=>'Habitacion Ejecutiva doble, amplia, moderna, cuenta con baño privado y dos camas',
                'numCamas'=>2,
                'foto'=>'5.png',
                'precio'=>5,
            ],
            [
                'descripcion'=>'Habitacion Ejecutiva triple, amplia, moderna, cuenta con dos baños  privado',
                'numCamas'=>3,
                'foto'=>'6.png',
                'precio'=>6,
            ],
            [
                'descripcion'=>'Habitacion Superior, moderna, cuenta con baño  privado y vista al mar',
                'numCamas'=>1,
                'foto'=>'7.png',
                'precio'=>7,
            ],
            [
                'descripcion'=>'Habitacion Superior doble, moderna, cuenta con baño  privado y vista al mar y a la piscina',
                'numCamas'=>2,
                'foto'=>'8.png',
                'precio'=>8,
            ],
            [
                'descripcion'=>'Habitacion Superior triple, moderna, cuenta con dos baños  privados y vista al mar y a la piscina',
                'numCamas'=>3,
                'foto'=>'9.png',
                'precio'=>9,
            ],
            [
                'descripcion'=>'Habitacion amplia, con vista al mar',
                'numCamas'=>1,
                'foto'=>'10.png',
                'precio'=>10,
            ],
            [
                'descripcion'=>'Habitacion amplia, con vista al mar y jacuzzi',
                'numCamas'=>1,
                'foto'=>'11.png',
                'precio'=>11,
            ],
            
        ];
        DB::table('habitaciones')->insert($habita);
    }
}
