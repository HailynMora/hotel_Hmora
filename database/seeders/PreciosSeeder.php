<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valor = [
            [
                'tipo'=> 'Estandar Sencilla',
                'precio'=> 45000,
            ],
            [
                'tipo'=>'Estandar Doble',
                'precio'=>50000,
            ],
            [
                'tipo'=>'Estandar Triple',
                'precio'=>80000,
            ],
            [
                'tipo'=>'Ejecutiva Sencilla',
                'precio'=>80000,
            ],
            [
                'tipo'=>'Ejecutiva Doble',
                'precio'=>150000,
            ],
            [
                'tipo'=>'Ejecutiva Triple',
                'precio'=>200000,
            ],
            [
                'tipo'=>'Superior Sencilla',
                'precio'=>90000,
            ],
            [
                'tipo'=>'Superior Doble',
                'precio'=>125000,
            ],
            [
                'tipo'=>'Superior Triple',
                'precio'=>150000,
            ],
            [
                'tipo'=>'Suite',
                'precio'=>220000,
            ],
            [
                'tipo'=>'Suite Doble',
                'precio'=>250000,
            ],


        ];
        DB::table('precio')->insert($valor);
    }
}
