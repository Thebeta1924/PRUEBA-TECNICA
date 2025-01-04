<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('nombres'); // Nombres del usuario
        $table->string('apellidos'); // Apellidos del usuario
        $table->string('cedula')->unique(); // Cédula
        $table->string('ciudadNacimiento'); // Ciudad de nacimiento
        $table->string('email')->unique(); // Correo electrónico
        $table->timestamp('email_verified_at')->nullable(); // Verificación de correo
        $table->string('password'); // Contraseña
        $table->boolean('deleted')->default(false); // Soft delete
        $table->rememberToken(); // Token para recordar usuario
        $table->timestamps(); // Timestamps
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
