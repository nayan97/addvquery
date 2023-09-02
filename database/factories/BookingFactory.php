<?php

namespace Database\Factories;

use App\Models\Booking;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\str;

use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 3),
            'room_id' => fake()->numberBetween(1, 10),
            'check_in' => fake()->dateTimeBetween('-10 days','now'),
            'check_out' => fake()->dateTimeBetween('now', '+10 days'),
        ];
    }
}
