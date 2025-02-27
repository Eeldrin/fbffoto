<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Admin kontrolü
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Bu bilgilere ait bir kullanıcımız bulunmuyor!',
        ]);
    }
}
