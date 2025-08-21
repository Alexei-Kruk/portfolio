<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Language;

class LanguageFactory extends Factory
{
    protected $model = Language::class;

    public function definition(): array
    {
        return [
            'resume_id' => \App\Models\Resume::inRandomOrder()->first()?->id ?? \App\Models\Resume::factory(),
            'language' => $this->faker->languageCode(),
            'proficiency' => $this->faker->randomElement(['A1','A2','B1','B2','C1','C2','Native']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
