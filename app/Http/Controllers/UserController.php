<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function __construct()
    {
        // $this->middleware('auth:api');
    }
    public function register(CreateUserRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password'=> $password
        ]);
        
        return response()->json([
            'message' => 'user created',
            'user' => $user
        ], 201);
    }

    public function login(LoginUserRequest $request)
    {
        $credentials = request(['email', 'password']);
        if (! $token = auth('api')->attempt($credentials))
        {
            return response()->json([
                'error' => 'Invalid Credentials'
            ], 422);
        }

        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
