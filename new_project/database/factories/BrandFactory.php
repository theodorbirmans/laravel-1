<?php

namespace Database\Factories;

use \App\Models\Brand;
use \Illuminate\Support\Str;
use \Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory {

    protected $model = \App\Models\Brand::class;
    
    public function definition() {
        $name = $this->faker->text(rand(20, 30));
        return [
            'name' => $name,
            'content' => $this->faker->text(rand(150, 200)),
            'slug' => Str::slug($name),
        ];
    }
}