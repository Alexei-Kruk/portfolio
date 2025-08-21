<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SoftwareSkill;

class SoftwareSkillFactory extends Factory
{
    protected $model = SoftwareSkill::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'level' => $this->faker->randomElement(['basic', 'intermediate', 'advanced']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
