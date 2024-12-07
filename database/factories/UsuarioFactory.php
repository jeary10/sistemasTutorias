<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
     
    public function definition(): array
    {
        return [
            'nombre' =>fake()->name(),
            'email' =>fake()->unique()->safeEmail(),
            'contraseña' => Hash::make('password'),
            'rol' =>fake()->randomElement(['tutor', 'estudiante']),
        ];
    }
}
