<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Registered successfully!');
    }

    public function showLogin()
{
    return view('login');
}

public function login(Request $request)
{
    $user = DB::table('users')->where('email', $request->email)->first();

    if ($user && \Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
        
        session(['user' => $user->name]);

        return redirect('/dashboard');
    }

    return redirect('/login')->with('error', 'Invalid email or password');
}
public function dashboard()
{
    if (!session()->has('user')) {
        return redirect('/login');
    }

    return view('dashboard');
}

public function logout(Request $request)
{
    session()->forget('user');
    return redirect('/login');
}
}
