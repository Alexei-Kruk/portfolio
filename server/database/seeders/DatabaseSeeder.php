<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 demo users
        \App\Models\User::factory(10)->create();

        // Create demo data for all main entities
        $this->call([
            ProjectSeeder::class,
            ExperienceSeeder::class,
            ResumeSeeder::class,
            SocialSeeder::class,
            StackSeeder::class,
            SoftSkillSeeder::class,
            SoftwareSkillSeeder::class,
            HobbySeeder::class,
            LanguageSeeder::class,
        ]);
    }
}
