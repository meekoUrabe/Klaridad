<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return view('account.login');
    }

    public function post_login(Request $request)
    {
        $validated = $request->validate([
            'phone_number' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('phone_number', $validated['phone_number'])->first();

        if (!Hash::check($validated['password'], $user['password']))
            return back()->with('error', 'Wrong credentials');

        Auth::login($user);

        // new session
        $request->session()->regenerate();

        return redirect()->route('home');
    }

    public function signup(Request $request)
    {
        return view('account.signup');
    }

    public function post_signup(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'password' => 'required|string'
        ]);

        return DB::transaction(function () use ($validated) {
            $user = User::create([
                'user_role_id' => 1,
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone_number' => $validated['phone_number'],
                'password' => bcrypt($validated['password'])
            ]);

            if ($user->wasRecentlyCreated)
                return back()->with('success', 'Account created');

            return back()->with('error', 'Something went wrong');
        });
    }
}
