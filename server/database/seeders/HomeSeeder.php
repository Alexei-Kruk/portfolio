<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        Home::factory(2)->create();
    }
}
