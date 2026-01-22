<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prendasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prendas')->insert([
            [
                'nombre' => 'prenda 1',
                'descripcion' => 'Camiseta de algodón 100% en color blanco, perfecta para el día a día',
                'precio' => 15.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'prenda 2',
                'descripcion' => 'Pantalón vaquero de corte recto, estilo clásico y versátil',
                'precio' => 45.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Prenda 3',
                'descripcion' => 'Chaqueta de cuero sintético, ideal para el otoño',
                'precio' => 89.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
