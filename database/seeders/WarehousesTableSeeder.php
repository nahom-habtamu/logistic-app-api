<?php

namespace Database\Seeders;
use App\Models\Warehouse;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{
    public function run(): void
    {
        Warehouse::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 1; $i < 11; $i++) {
            Warehouse::create([
                'supplier-id' => $i,
                'address' => $faker->sentence,
            ]);
        }
    }
}
