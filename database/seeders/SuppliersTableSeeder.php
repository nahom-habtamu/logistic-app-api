<?php

namespace Database\Seeders;
use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    public function run(): void
    {
        Supplier::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Supplier::create([
                'name' => $faker->word,
                'address' => $faker->sentence,
            ]);
        }
    }
}
