<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserva =[
            [
                'cliente' => '2',
                'entrada' => '2020-12-11',
                'numero' => '3',
                'salida' => '2020-12-30',
            ],
            [
                'cliente' => '1',
                'entrada' => '2020-11-29',
                'numero' => '4',
                'salida' => '2020-12-03',
            ],
            [
                'cliente' => '4',
                'entrada' => '2020-12-07',
                'numero' => '5',
                'salida' => '2020-12-18',
            ],
            [
                'cliente' => '5',
                'entrada' => '2020-11-30',
                'numero' => '6',
                'salida' => '2020-12-01',
            ],
            [
                'cliente' => '1',
                'entrada' => '2020-12-17',
                'numero' => '1',            
                'entrada' => '2021-01-06',
            ],
        ];
        DB::table('reserva')->insert($reserva);
    }
}
