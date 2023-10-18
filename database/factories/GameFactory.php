<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genre = Genre::factory()->create();
        return [
            'name' => $this->faker->title(10),
            'description' => $this->faker->text(25),
            'genre_id' => $genre->id,
        ];
    }
}
