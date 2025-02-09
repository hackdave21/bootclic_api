<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Lomé'],
            ['name' => 'Aného'],
            ['name' => 'Kara'],
            ['name' => 'Dapaong']
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
