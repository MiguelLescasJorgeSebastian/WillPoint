<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RegistroHistorico>
 */
class RegistroHistoricoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first()->id;
        $monto_inicial = $this->faker->randomFloat(2, 100, 1000);
        $monto_final = $this->faker->randomFloat(2, 100, 1000);
        return [
            'user_id' => $userId,
            'monto_inicial' => $monto_inicial,
            'monto_final' => $monto_final,
        ];
    }
}
