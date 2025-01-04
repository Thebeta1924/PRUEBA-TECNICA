<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Obtener todos los usuarios
    public function index()
    {
        $users = User::where('deleted', false)->get();
        return response()->json($users);
    }

    // Crear un nuevo usuario
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cedula' => 'required|string|unique:users',
            'ciudadNacimiento' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'nombres' => $validated['nombres'],
            'apellidos' => $validated['apellidos'],
            'cedula' => $validated['cedula'],
            'ciudadNacimiento' => $validated['ciudadNacimiento'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return response()->json($user, 201);
    }

    // Editar un usuario
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'nombres' => 'string|max:255',
            'apellidos' => 'string|max:255',
            'ciudadNacimiento' => 'string|max:255',
        ]);

        $user->update($validated);

        return response()->json($user);
    }

    // Soft delete para eliminar un usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->update(['deleted' => true]);

        return response()->json(['message' => 'Usuario eliminado correctamente.']);
    }
}
