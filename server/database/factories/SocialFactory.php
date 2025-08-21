<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Social;

class SocialFactory extends Factory
{
    protected $model = Social::class;

    public function definition(): array
    {
        return [
            'platform' => $this->faker->word(),
            'url' => $this->faker->url(),
            'icon' => $this->faker->word().'.svg',
            // Привязываем к существующему Home или создаём новый
            'home_id' => \App\Models\Home::inRandomOrder()->first()?->id ?? \App\Models\Home::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
