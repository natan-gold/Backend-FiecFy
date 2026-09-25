<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;


class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(4, true),
            'duration_seconds'=> fake()->numberBetween(120, 300),
            'is_explicit' => fake() -> boolean(),

            //Garante FK válida gerando o Álbum correspondente!
            'album_id' => \App\Models\Albums::factory()
        ];
    }
}
