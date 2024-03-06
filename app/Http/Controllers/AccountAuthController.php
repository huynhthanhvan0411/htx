<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountAuthController extends Controller
{
    //login
    public function getLogin(Request $request)
    {
        return view('frontend.login');
    }

    public function postLogin(Request $request)
    {
        // Validate input data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            // Authentication was successful
            $user = Auth::user();

            // Check user role
            if ($user->role == 1) {
                return redirect()->route('admin');
                // Redirect to admin dashboard

            } elseif ($user->role == 2) {
                return redirect()->route('index'); // Redirect to home page
            }
        }

        // Authentication failed
        return redirect()->route('getLogin')->with('error', 'Invalid email or password.');
    }

    //register
    public function getRegister()
    {
        return view('frontend.register');
    }
    public function postRegister()
    {
    }

    //logout
    public function logout()
    {
    }
}
