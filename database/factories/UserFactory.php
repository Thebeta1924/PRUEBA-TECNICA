<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombres' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'cedula' => $this->faker->unique()->numerify('#########'),
            'ciudadNacimiento' => $this->faker->randomElement(['Bogotá', 'Medellín', 'Cali', 'Barranquilla', 'Cartagena']),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password123'), // Contraseña predeterminada
        ];
    }
}
