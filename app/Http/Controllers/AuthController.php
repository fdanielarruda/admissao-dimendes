<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // login user
    public function index() {
        return view('login.index');
    }

    // authentication
    public function auth(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('task.index');
        } else {
            return redirect()->back();
        }
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }

    public function register() {
        return view('login.register');
    }

    public function store_user(UserRequest $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }
}
