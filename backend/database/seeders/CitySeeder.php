<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City; // Importar el modelo City

class CitySeeder extends Seeder
{
    public function run()
    {
        $cities = [
            ['name' => 'Bogotá'],
            ['name' => 'Medellín'],
            ['name' => 'Cali'],
            ['name' => 'Barranquilla'],
            ['name' => 'Cartagena'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
