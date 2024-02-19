<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> words(3, true),
            'editor' => fake() -> company(),
            'author' => fake() -> name(),
            'designer' => fake() ->  name(),
            'genre' => fake() -> randomElement(['Azione', 'Avventura', 'Horror', 'Azione', 'Thriller']),
            'price' => fake() -> randomFloat(2, 9, 30),
            'pubblication_year' => fake() -> year(),
            'quantity_in_store' => fake() -> numberBetween(0, 99),
            'description' => fake() ->paragraph()
        ];
    }
}
