<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Clase DB (importante)

class MetodoPagoSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('metodo_pago')->insert([
            ['metodo' => 'EFECTIVO'],
            ['metodo' => 'DEBITO'],
            ['metodo' => 'TRANSFERENCIA'],
        ]);
    }
}
