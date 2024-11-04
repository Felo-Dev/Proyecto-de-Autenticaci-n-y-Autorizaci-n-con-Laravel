<?php
namespace App\Http\Controllers;
app/Http/Middleware/AuthMiddleware.php
app/Http/Controllers/AuthController.php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Aquí valida el usuario y genera el token
        $token = hash('sha1', $request->email . now() . rand(200, 500));

        return response()->json(['token' => $token, 'expires_in' => 3600], 200);
    }
}
