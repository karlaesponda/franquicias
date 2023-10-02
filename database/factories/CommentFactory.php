<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Franquicia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
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
            'descripcion' => $this->faker->realText(255),
            'user_id' => User::all()->random()->id,
            'franquicia_id' => Franquicia::all()->random()->id,
        ];
    }
}
