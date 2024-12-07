<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::factory(5)->state(['rol' => 'tutor'])->create();

        // Crear 10 estudiantes
        Usuario::factory(10)->state(['rol' => 'estudiante'])->create();
    }
}
