<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return back()->withErrors(['credentials', 'Invalid credentials']);
        }

        if(Gate::allows('is_admin')){
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route("application.index");
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:4', 'confirmed']
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('applicant.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();

        return redirect()->route('login');
    }
}
