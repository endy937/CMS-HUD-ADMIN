<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private function getStatusMessage($statusCode)
    {
        $messages = [
            200 => '200 OK – Request successful. The server has responded as required.',
            201 => '201 Created – The request has been fulfilled and resulted in a new resource being created.',
            400 => '400 Bad Request – The server could not understand the request due to invalid syntax.',
            401 => '401 Unauthorized – Authentication is required and has failed or has not yet been provided.',
            403 => '403 Forbidden – The client does not have access rights to the content.',
            404 => '404 Not Found – The server can not find the requested resource.',
            500 => '500 Internal Server Error – The server encountered an unexpected condition.'
        ];

        return $messages[$statusCode] ?? 'Unknown status';
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);

    if (!Auth::attempt($credentials)) {
        return response()->json([
            'status_code'    => 401,
            'status_message' => '401 Unauthorized – Email atau password salah',
            'message'        => 'Email atau password salah'
        ], 401);
    }

    $user = Auth::user();

    // Sanctum:
    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'status_code'    => 200,
        'status_message' => '200 OK – Request successful. The server has responded as required.',
        'message'        => 'Login berhasil',
        'name'           => $user->name,
        'email'          => $user->email,
        'token'          => $token
    ], 200);
}


    public function me(Request $request)
    {
        $user = $request->user();
        $statusCode = 200;

        return response()->json([
            'status_code'    => $statusCode,
            'status_message' => $this->getStatusMessage($statusCode),
            'message'        => 'Data user berhasil diambil',
            'name'           => $user->name,
            'email'          => $user->email
        ], $statusCode);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        $statusCode = 200;

        return response()->json([
            'status_code'    => $statusCode,
            'status_message' => $this->getStatusMessage($statusCode),
            'message'        => 'Logout berhasil'
        ], $statusCode);
    }
}
