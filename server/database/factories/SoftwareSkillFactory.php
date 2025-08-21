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
            'resume_id' => \App\Models\Resume::inRandomOrder()->first()?->id ?? \App\Models\Resume::factory(),
            'category' => $this->faker->word(),
            'skills' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
