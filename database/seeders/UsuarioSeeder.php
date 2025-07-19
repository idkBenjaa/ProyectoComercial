<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Clase DB (importante)
//use Illuminate\Support\Facades\Hash; // Para encriptar contraseñas si usas Hash::make

class UsuarioSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('usuario')->insert([

            [   
                'contraseña'=>'admin123',
                'req_cambio'=>false,
                'id_rol'=>1,
            ],

            [
                'contraseña'=>'trabajador123',
                'req_cambio'=>false,
                'id_rol'=>2,
            ]
            ]);
    }
}
