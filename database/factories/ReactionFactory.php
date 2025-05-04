<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\ReactionType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reaction>
 */
class ReactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_name' => fake()->text(10),
            'comment_id'=>Comment::all()->random()->id,
            'user_id'=>User::all()->random()->id,
            'reaction_type_id'=>ReactionType::all()->random()->id
        ];
    }
}
