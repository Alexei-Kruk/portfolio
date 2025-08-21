<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hobby;

class HobbyFactory extends Factory
{
    protected $model = Hobby::class;

    public function definition(): array
    {
        return [
            'resume_id' => \App\Models\Resume::inRandomOrder()->first()?->id ?? \App\Models\Resume::factory(),
            'name' => $this->faker->word(),
            'icon' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
