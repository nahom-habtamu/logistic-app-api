<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 1; $i < 11; $i++) {
            Product::create([
                'warehouse-id' => $i,
                'name' => $faker->word,
                'price' => $faker->numberBetween(100, 1000)
            ]);
        }
    }
}
