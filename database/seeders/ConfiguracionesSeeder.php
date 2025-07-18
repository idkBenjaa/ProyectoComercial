<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//Funcion no utilizada

use Illuminate\Support\Facades\DB; //Clase DB (importante)
use Illuminate\Database\Seeder;

class ConfiguracionesSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('configuraciones')->insert([
            'stock_bajo' => 10,
            'stock_critico' => 3,
            'dias_vencimiento' => 7,
        ]);

        /*EN ESTE CASO, NO SE USA ]] YA QUE SI LO USARAMOS, 
        ESTARIAMOS ENVIANDO UN DATO DIFERENTE A 3 FILAS
        Y LOS NUMEROS VAN SIN ' PARA QUE SEAN TRATADOS COMO INT'*/
    }
}
