<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SoftSkill;

class SoftSkillSeeder extends Seeder
{
    public function run(): void
    {
        SoftSkill::factory(5)->create();
    }
}
