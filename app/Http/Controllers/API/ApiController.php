<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MailVerification;
use App\Http\Controllers\Controller;



class ApiController extends Controller
{
    public function register(Request $request){

        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'nombreUsuario' => ['required', 'string', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'online' => ['required', 'string', 'max:2'],
            'tipo_usuario' => ['required', 'string', 'max:2'],
            'zona' => ['required', 'string', 'max:255'],
            'cliente' => ['required', 'string', 'max:255'],
            'Estatus' => ['required', 'string', 'max:255'],
        ]);

        $usuario = Usuario::create([
            'nombre' => $validatedData['nombre'],
            'nombreUsuario' => $validatedData['nombreUsuario'],
            'password' => $validatedData['password'],
            'online' => $validatedData['online'],
            'tipo_usuario' => $validatedData['tipo_usuario'],
            'zona' => $validatedData['zona'],
            'cliente' => $validatedData['cliente'],
            'Estatus' => $validatedData['Estatus'],
        ]);


        $token = $usuario->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => "Usuario registrado",
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        $user = Usuario::where([
            'nombreUsuario' => $request->nombreUsuario,
            'password' => $request->password
        ])->first();

        if($user)
        {
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'message' => "Usuario exitoso",
            ]);
        }
        else {
            return response()->json([
                'message' => 'Login invalido'
            ], 401);
        }
    }

    public function profile(Request $request)
    {
        return $request->user();
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'Usuario fuera del sistema']);
    }




}
