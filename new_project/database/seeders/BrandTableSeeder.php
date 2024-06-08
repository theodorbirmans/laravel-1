<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Brand::factory()->count(4)->create();
    }
}
