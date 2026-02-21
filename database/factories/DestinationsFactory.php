<?php

namespace Database\Factories;

use App\Category;
use App\Destinations;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinationsFactory extends Factory
{
    protected $model = Destinations::class;

    public function definition(): array
    {
        $tourTypes = ['Cultural & Sightseeing', 'Beach & Adventure', 'Beach & Culture', 'Wildlife Safari', 'Mountain Trekking', 'City Explorer'];
        $durations = ['3 Days / 2 Nights', '4 Days / 3 Nights', '5 Days / 4 Nights', '6 Days / 5 Nights', '7 Days / 6 Nights'];
        $groupSizes = ['4-8 People', '6-10 People', '8-12 People', '10-15 People', '12-20 People'];

        return [
            'title' => fake()->unique()->city().', '.fake()->country(),
            'description' => fake()->sentence(12),
            'content' => fake()->paragraphs(3, true),
            'image' => 'images/destination-'.fake()->numberBetween(1, 12).'.jpg',
            'pricing' => 'Kshs '.fake()->numberBetween(10, 150) * 1000,
            'category_id' => Category::factory(),
            'published_at' => now(),
            'duration' => fake()->randomElement($durations),
            'group_size' => fake()->randomElement($groupSizes),
            'tour_type' => fake()->randomElement($tourTypes),
        ];
    }

    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => null,
        ]);
    }
}
