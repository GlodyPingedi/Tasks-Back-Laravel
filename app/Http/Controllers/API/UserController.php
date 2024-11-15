<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $users = User::all();
        return response()->json($users);
    }

    public function register(Request $request)
    {
        $user = $request->all();
        $user['password'] = Hash::make($user['password']);
        User::create([
            'name' => $user['noms'],
            'email' => $user['email'],
            'password' => $user['password'],
        ]);
        return response()->json(['message' => 'User created successfully']);
    }
}
