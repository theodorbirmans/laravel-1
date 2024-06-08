<?php

namespace Database\Factories;

use \App\Models\Product;
use \Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory {

    protected $model = \App\Models\Product::class;

    public function definition() {
        $name = $this->faker->text(rand(40, 50));
        return [
            'category_id' => rand(1, 4),
            'brand_id' => rand(1, 4),
            'name' => $name,
            'content' => $this->faker->text(rand(150, 200)),
            'slug' => Str::slug($name),
            'price' => rand(1000, 2000),
        ];
    }
}