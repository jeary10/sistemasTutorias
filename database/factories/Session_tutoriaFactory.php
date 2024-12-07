<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\Session_tutorias;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Session_tutoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tutor_id' => Usuario::factory()->state(['rol' => 'tutor']),
            'estudiante_id' =>Usuario::factory()->state(['rol' => 'estudiante']), 
            'materia' =>fake()->randomElement(['Matemáticas', 'Física', 'Química', 'Historia']),
            'fecha' =>fake()->date(),
            'hora' => fake()->time(),
            'estado' =>fake()->randomElement(['pendiente', 'completada']),
        ];
    }
}
