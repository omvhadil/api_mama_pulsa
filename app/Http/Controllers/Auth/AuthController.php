<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // disini akan di cek. apakah user mengisi email dan password dengan benar. Kecuali
        if(!Auth::attempt($request->only("email", "password"))) {
            return response()->json(['message' => 'email or password are wrong'], 401);
        }
        // disini akan di cek apakah ada email di database dengan email yang di inputkan oleh user
        $user = User::where('email', $request['email'])->firstOrFail();
        // jika ada emailnya cocok dengan yang di database, maka akan dibuatkan token baru 
        $token = $user->createToken('auth_token')->plainTextToken;
        // setelah itu dari API akan mengembalikan response berupa json 
        return response()->json(
            [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'access_token' => "Bearer " . $token,
            ]
            );
    }

    // public function register(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);
        
        
    //     if($validated) {
    //         $input = [
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => bcrypt('password')
    //         ];
    //         if($input){
    //             $user = User::create($input);
    //             $token = $user->createToken('token')->plainTextToken;
    //             return response()->json([
    //                 'success' => true,
    //                 'message' => 'berhasil',
    //                 'data' => $user,
    //                 'token' => $token
    //             ]);
    //         }
    //     }
    // }
}