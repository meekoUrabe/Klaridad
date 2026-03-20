<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barangay;
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
<<<<<<< HEAD
        $barangay = Barangay::all();
        return view('account.signup', compact('barangay'));
=======
<<<<<<< HEAD
        return view('account.signup');
=======
        $barangay = Barangay::all();
        return view('account.signup', compact('barangay'));
>>>>>>> 1ec72c2ac4bd98a2919bb4981e0a5eee4550803b
>>>>>>> origin/Aki-Citizen
    }

    public function post_signup(Request $request)
    {
        $validated = $request->validate([
<<<<<<< HEAD
            'barangay_id' => 'required|int',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'password' => 'required|string',
            'confirm_password' => 'required|string'
        ]);

        if ($validated['password'] != $validated['confirm_password'])
            return back()->with('error', 'Different confirm password');

        return DB::transaction(function () use ($validated) {
            $user = User::create([
                'user_role_id' => 1,
                'barangay_id' => $validated['barangay_id'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone_number' => $validated['phone_number'],
                'password' => bcrypt($validated['confirm_password'])
            ]);

            if ($user->wasRecentlyCreated)
                return back()->with('success', 'Account created');

=======
<<<<<<< HEAD
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

=======
            'barangay_id' => 'required|int',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'password' => 'required|string',
            'confirm_password' => 'required|string'
        ]);

        if ($validated['password'] != $validated['confirm_password'])
            return back()->with('error', 'Different confirm password');

        return DB::transaction(function () use ($validated) {
            $user = User::create([
                'user_role_id' => 1,
                'barangay_id' => $validated['barangay_id'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone_number' => $validated['phone_number'],
                'password' => bcrypt($validated['confirm_password'])
            ]);

            if ($user->wasRecentlyCreated)
                return back()->with('success', 'Account created');

>>>>>>> 1ec72c2ac4bd98a2919bb4981e0a5eee4550803b
>>>>>>> origin/Aki-Citizen
            return back()->with('error', 'Something went wrong');
        });
    }
}
