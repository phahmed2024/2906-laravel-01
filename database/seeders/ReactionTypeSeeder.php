<?php

namespace Database\Seeders;

use App\Models\Reaction;
use App\Models\ReactionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reactions = [
            'Like',
            'Dislike',
            'Love',
            'Angry',
            'Sad',
        ];
        foreach ($reactions as $reaction) {
            ReactionType::create([
                'type' => $reaction,
            ]);
        }
    }
}
