<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email_address' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $credentials = $request->only(['email_address', 'password']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            return redirect()
                ->route('dashboard')
                ->with('success', 'Welcome back, ' . $user->first_name . '!');
        }
    }
}
