<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //$this->faker->sentence(3);
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'created_at' => now()
        ];
    }
}

//fake() permet de generer des données aléatoires
//php artisan tinker
//Post::factory()->count(10)->create();