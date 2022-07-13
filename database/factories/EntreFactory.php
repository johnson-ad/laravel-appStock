<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entree>
 */
class EntreFactory extends Factory
{

    protected $model = Entree::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantite' => fake()->number(123),
            'prix' => fake()->number(210),
            'date' => fake()->dateTimeBetween('-1 years', 'now'),
            'created_at' => now(),
        ];
    }
}
