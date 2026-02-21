<?php

namespace Database\Factories;

use App\Booking;
use App\Destinations;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'destination_id' => Destinations::factory(),
            'travel_date' => fake()->dateTimeBetween('+1 week', '+3 months'),
            'guests' => fake()->numberBetween(1, 6),
            'total_price' => fake()->randomFloat(2, 100, 5000),
            'status' => 'pending',
            'notes' => fake()->optional()->sentence(),
        ];
    }

    public function confirmed(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'confirmed',
        ]);
    }

    public function cancelled(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'cancelled',
        ]);
    }

    public function completed(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'completed',
            'travel_date' => fake()->dateTimeBetween('-3 months', '-1 week'),
        ]);
    }
}
