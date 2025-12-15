<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // tampilkan form
    public function form()
    {
        return view('login');
    }

    // submit via FORM
    public function login(Request $request)
    {
        return "Login FORM <br>
                Username: {$request->username} <br>
                Password: {$request->password}";
    }

    // submit via AJAX
    public function loginAjax(Request $request)
    {
        return response()->json([
            'username' => $request->username,
            'password' => $request->password,
            'status'   => 'Login via AJAX berhasil'
        ]);
    }
}
