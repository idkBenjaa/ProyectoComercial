<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Clase DB (importante)

class ProductosSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('productos')->insert([

            [
                'codigo_producto'=>1234567891234,
                'nombre_producto'=>'COCA COLA 1.5L',
                'stock'=>20,
                'precio'=>1350,
                'fecha_venc'=>'2025-12-12',
                'id_categoria'=>1,
            ],
            [
                'codigo_producto'=>1234567891235,
                'nombre_producto'=>'LAYS JAMON SERRANO',
                'stock'=>20,
                'precio'=>2200,
                'fecha_venc'=>'2025-12-12',
                'id_categoria'=>2,
            ],
            [
                'codigo_producto'=>1234567891236,
                'nombre_producto'=>'CECINA LISA RECETA DEL ABUELO',
                'stock'=>20,
                'precio'=>1350,
                'fecha_venc'=>'2025-12-12',
                'id_categoria'=>3,
            ],
        ]);
    }
}
