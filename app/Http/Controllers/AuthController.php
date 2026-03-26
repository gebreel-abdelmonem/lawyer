<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Doctrine\Inflector\Rules\Esperanto\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('admin/login');
    }

    // تسجيل مستخدم جديد
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return Redirect('admin/login');
    }


    // تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/posts');
        }

        return back()->with('error', 'Invalid data');
    }
}
