<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opera>
 */
class OperaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $operas = ['Metropolitan Opera House', 'Opéra Garnier', 'Opéra Bastille', 'La Firence', 'Teatro alla Scala', 'Bolsoj Tyeatr', 'La Fenic',
        'Teatro dell Opera', 'Teatro di San Carlo', 'Teatro Massimo', 'Palais Garnier', 'Opera de Monte Carlo', 'Royal Opera Hause',
        'Oslo Opera Hause', 'Royal Danish Opera House', 'Teatro Colón'];


        return [
            'name' => fake()->unique()->randomElement($operas),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'const_time' => fake()->dateTimeBetween('-150 years', '-50 years')->format('Y-m-d'),
            'seats_count' => fake()->numberBetween(200, 600),
            'ratings' => fake()->numberBetween(5, 10)
        ];
    }
}
