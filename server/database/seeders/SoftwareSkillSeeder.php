<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SoftwareSkill;

class SoftwareSkillSeeder extends Seeder
{
    public function run(): void
    {
        SoftwareSkill::factory(5)->create();
    }
}
