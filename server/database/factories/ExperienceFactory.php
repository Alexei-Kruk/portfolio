<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Experience;

class ExperienceFactory extends Factory
{
    protected $model = Experience::class;

    public function definition(): array
    {
        return [
            'company_name' => $this->faker->company(),
            'position' => $this->faker->jobTitle(),
            'short_description' => $this->faker->paragraph(),
            'date_from' => $from = $this->faker->date(),
            'date_to' => $this->faker->dateTimeBetween($from, '+5 years')->format('Y'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
