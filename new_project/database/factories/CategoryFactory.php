<?php

namespace Database\Factories;

use \App\Models\Category;
use Illuminate\Support\Str;
use \Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory {
    
    protected $model = \App\Models\Category::class;

    public function definition() {
        $name = $this->faker->text(rand(30, 40));
        return [
            'name' => $name,
            'content' => $this->faker->text(rand(150, 200)),
            'slug' => Str::slug($name),
        ];
    }
}