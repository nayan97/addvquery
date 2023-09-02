<?php

namespace Database\Factories;

use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\str;

use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => fake()->text(500),
            'user_id' => fake()->numberBetween(1,3)
        ];
    }

   


}
