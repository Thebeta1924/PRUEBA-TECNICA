<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder para ciudades
        $this->call(CitySeeder::class);

        // Crear usuarios de prueba
        User::factory(10)->create();

        // Crear un usuario específico
        User::create([
            'nombres' => 'Test',
            'apellidos' => 'User',
            'cedula' => '123456789',
            'ciudadNacimiento' => 'Bogotá',
            'email' => 'test@example.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
