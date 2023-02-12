<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fruit>
 */
class FruitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        //$faker = \Faker\Factory::create();
        //$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        $fruits = ['apple', 'banana', 'mango', 'lemon', 'strawberry', 'orange', 'lime', 'grapefruit', 'cherry', 'coconut', 'apricot', 'blueberry'];
        $taste = ['bitter', 'sour', 'sweet', 'salty', 'acrid'];


        return [
            //'name' => $faker->fruitName(),
            'name' => fake()->Unique()->randomElement($fruits),
            'color' => fake()->colorName(),
            'taste' => fake()->randomElement($taste),
            'weight' => fake()->numberBetween(1, 6),
            'purch_date' => fake()->dateTimeBetween('-6 weeks', 'now')->format('Y-m-d')
        ];
    }
}
