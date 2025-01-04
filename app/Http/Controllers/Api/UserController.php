<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        // Lógica para guardar un usuario
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un usuario
    }

    public function destroy($id)
    {
        // Lógica para eliminar un usuario (soft delete)
    }
}
