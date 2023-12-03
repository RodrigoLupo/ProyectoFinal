<?php

namespace Database\Seeders;

use App\Models\Compania;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Compania::create([
            'nombre' => 'Libreria Feli',
            'correo' => 'info@gmail.com',
            'telefono' => '954632132',
            'direccion' => 'Perú-Arequipa',
        ]);
    }
}
