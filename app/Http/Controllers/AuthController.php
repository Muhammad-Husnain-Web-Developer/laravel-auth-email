<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    public function __construct()
{

}

    public function showLoginForm(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('auth.login');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

         if (Auth::attempt($request->only('email', 'password'))) {
    $request->session()->regenerate();
    return redirect()->intended(route('dashboard'))->with('success', 'Welcome back!');
        }
        else{
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
        }





    }

    public function logout(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}
