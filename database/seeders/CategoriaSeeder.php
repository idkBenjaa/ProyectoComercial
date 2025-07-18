<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//Clase no utilizada por el momento, se deja por si se usa en un futuro

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Clase DB (importante)

class CategoriaSeeder extends Seeder
{
    //CREACION DE DATOS DE PRUEBA MEDIANTE SEEDER

    public function run(): void
    {
        DB::table('categoria')->insert([
            ['categoria' => 'BEBIDAS'],
            ['categoria' => 'SNACK'],
            ['categoria' => 'ABARROTES'],
            ['categoria' => 'CARNES'],
            ['categoria' => 'GALLETAS'],
            ['categoria' => 'LACTEOS'],
            ['categoria' => 'ASEO'],
        ]);
    }
}
