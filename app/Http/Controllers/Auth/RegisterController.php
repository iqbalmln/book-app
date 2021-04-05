<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:20',
            'last_name' => 'nullable|string|max:30',
            'email_address' => 'required|string|email|unique:users',
            'password' => 'required|string|min:4'
        ]);
        
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'password' => Hash::make($request->password),
            'role_id' => '1'
        ]);

        return redirect()
            ->route('auth.login.index')
            ->with('success', 'Account created successfully!');
    }
}
