<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Clase DB (importante)

class RolSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('rol')->insert([
            ['rol' => 'ADMINISTRADOR'],
            ['rol' => 'TRABAJADOR'],
        ]);
    }
}
