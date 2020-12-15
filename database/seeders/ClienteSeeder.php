<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'DNI'=>'1009875644',
                'nombre'=>'Maria Valentina Vallejos Lopez',
                'genero'=>'F',
                'direccion'=>'Crr 5 # 3-20',
                'telefono'=>'3215678765',
                'foto'=>'1.png',
            ],
            [
                'DNI'=>'100845231',
                'nombre'=>'Diego Perez',
                'genero'=>'M',
                'direccion'=>'Crr 4 cll 3 #9',
                'telefono'=>'3215678765',
                'foto'=>'2.png',
            ],
            [
                'DNI'=>'1088738176',
                'nombre'=>'Mario Daniel Rosero',
                'genero'=>'M',
                'direccion'=>'Cll 18 crr 4 #4 barrio centro',
                'telefono'=>'3197654374',
                'foto'=>'3.png',
            ],
            [
                'DNI'=>'54379084',
                'nombre'=>'Shaira Jimenez',
                'genero'=>'F',
                'direccion'=>'Barrio Genoy',
                'telefono'=>'3215674213',
                'foto'=>'4.png',
            ],
            [
                'DNI'=>'59756431',
                'nombre'=>'Juliana  Gomez',
                'genero'=>'F',
                'direccion'=>'Barrio Industrial Crr 8# 3-25',
                'telefono'=>'3234904179',
                'foto'=>'5.png',
            ],
            [
                'DNI'=>'105644',
                'nombre'=>'Juana Valentina Arias',
                'genero'=>'F',
                'direccion'=>'calle 5 Barrio Alcazar',
                'telefono'=>'3215678777',
                'foto'=>'6.png',
            ],
            [
                'DNI'=>'9875644',
                'nombre'=>'Luis Carlos Castro Lopez',
                'genero'=>'M',
                'direccion'=>'Barrio San alejo',
                'telefono'=>'3154904380',
                'foto'=>'7.png',
            ],
            [
                'DNI'=>'89326732',
                'nombre'=>'Luis Hernar Olves',
                'genero'=>'M',
                'direccion'=>'Crr 2 calle 3 # 20',
                'telefono'=>'3104258116',
                'foto'=>'8.png',
            ],
            [
                'DNI'=>'1775642611',
                'nombre'=>'Jhon Javier Mera Hurtado',
                'genero'=>'M',
                'direccion'=>'Barrio Inmaculada Mz 3A casa ',
                'telefono'=>'3189903475',
                'foto'=>'9.png',
            ],
            [
                'DNI'=>'6734214',
                'nombre'=>'Camila Andrea Ibarra',
                'genero'=>'F',
                'direccion'=>'Crr 3 # 5-9',
                'telefono'=>'3116548675',
                'foto'=>'10.png',
            ],

        ];
        DB::table('cliente')->insert($user);
    }
}
