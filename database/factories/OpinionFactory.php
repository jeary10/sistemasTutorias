<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Opinion;
use App\Models\SessionTutoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opinion>
 */
class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'session_id' => Session_tutoria::factory(),
            'calificacion' =>fake()->numberBetween(1, 5), // Rango de calificación de 1 a 5
            'comentario' =>fake()->text(200),
        ];
    }
}
