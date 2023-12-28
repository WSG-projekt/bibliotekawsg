<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names=['Horror','Thriller','Przygodowa','Romantyczna','Dla dzieci','Komiks','Fantastyka'];
        return [
            'name' =>$names[array_rand($names)]
        ];
    }
}
