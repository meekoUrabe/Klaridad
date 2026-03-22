<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use App\Models\Sector;
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

        // check users access
        if ($user->hasRole('Citizen'))
            return redirect()->route('citizen.dashboard');
        else if ($user->hasRole('Barangay Official'))
            return redirect()->route('barangay.dashboard');
        else if ($user->hasRole('City Government'))
            return redirect()->route('goverment.dashboard');
    }

    public function signup(Request $request)
    {
        $city = City::all();
        $barangay = Barangay::
        select('b.*')
        ->from('barangay as b')
        ->join('sector as s', 'b.barangay_id', 's.barangay_id')
        ->where('city_id', '=', $request->query('city'))
        ->get();

        return view('account.signup', compact('city', 'barangay'));
    }

    public function post_signup(Request $request)
    {
        $validated = $request->validate([
            'city_id' => 'required|int',
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
                'city_id' => $validated['city_id'],
                'barangay_id' => $validated['barangay_id'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone_number' => $validated['phone_number'],
                'password' => bcrypt($validated['confirm_password'])
            ]);

            if ($user->wasRecentlyCreated)
                return back()->with('success', 'Account created');

            return back()->with('error', 'Something went wrong');
        });
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
