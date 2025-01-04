<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nombres' => 'Test',
            'apellidos' => 'User',
            'cedula' => '123456789',
            'ciudadNacimiento' => 'Bogotá',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
