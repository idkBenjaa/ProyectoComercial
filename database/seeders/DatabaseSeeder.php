<?php

//Aca se define que seeders y en que orden se enviaran a la BD.

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call([
            RolSeeder::class,
            CategoriaSeeder::class,
            MetodoPagoSeeder::class,
            ConfiguracionesSeeder::class,
            UsuarioSeeder::class,
            ProductosSeeder::class,
        ]);
    }
}
