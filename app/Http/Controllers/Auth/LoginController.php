<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Try login with email
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }

            return redirect('/');
        }

        // Try login with phone instead of email
        if (Auth::attempt(['phone' => $request->email, 'password' => $request->password], $request->boolean('remember'))) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
