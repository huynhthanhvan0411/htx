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
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            Session::put('user_name_login', $user->name);
            Session::put('user_id_login', $user->id);

            // You can customize your redirect here
            return redirect()->route('index')->with('thongbao', 'Đăng nhập thành công');
        } else {
            // Authentication failed...
            return redirect()->back()->with('error', 'Thông tin đăng nhập không chính xác');
        }
    }


    //logout
    public function logout()
    {
        Auth::logout();
        Session::forget('user_name_login');
        Session::forget('user_id_login');

        // You can customize your redirect here
        return redirect()->route('index')->with('thongbao', 'Đăng xuất thành công');
    }
    //register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:accounts',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Account::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // Add other fields as necessary
        ]);

        Session::put('user_name_login', $user->name);
        Session::put('user_id_login', $user->id);

        // You can customize your redirect here
        return redirect()->route('index')->with('thongbao', 'Đăng ký thành công');
    }
}