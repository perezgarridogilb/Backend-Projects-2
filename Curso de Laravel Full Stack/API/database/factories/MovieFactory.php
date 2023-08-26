<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        Movie::truncate();
        
        $faker = \Faker\Factory::create();


        return [
           
                'title' => $faker->sentence,
                'synopsis' => $faker->paragraph,
                'year' => $faker->randomDigit,
                'cover' => $faker->sentence
            
        ];
    }
}
