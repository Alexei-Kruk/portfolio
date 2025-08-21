<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Stack;

class StackFactory extends Factory
{
    protected $model = Stack::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'level' => $this->faker->randomElement(['junior', 'middle', 'senior']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
