<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fact = [
            [
                'numero'=>8,
                'cliente'=>2,
                'formaPago'=>2,
                'entrada'=>'2020-03-09',
                'salida'=>'2020-03-12',
                'total'=>375000,
            ],
            [
                'numero'=>1,
                'cliente'=>3,
                'formaPago'=>1,
                'entrada'=>'2019-05-12',
                'salida'=>'2019-05-13',
                'total'=>45000,
            ],
            [
                'numero'=>3,
                'cliente'=>2,
                'formaPago'=>2,
                'entrada'=>'2019-04-01',
                'salida'=>'2019-04-02',
                'total'=>80000,
            ],
            [
                'numero'=>6,
                'cliente'=>1,
                'formaPago'=>3,
                'entrada'=>'2020-10-01',
                'salida'=>'2020-10-08',
                'total'=>800000,
            ],
            [
                'numero'=>11,
                'cliente'=>1,
                'formaPago'=>3,
                'entrada'=>'2020-11-01',
                'salida'=>'2020-11-02',
                'total'=>250000,
            ],
            [
                'numero'=>2,
                'cliente'=>5,
                'formaPago'=>1,
                'entrada'=>'2020-12-09',
                'salida'=>'2020-12-11',
                'total'=>150000,
            ],
            
        ];
        DB::table('factura')->insert($fact);
    }
}
