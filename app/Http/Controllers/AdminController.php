<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getDashBoard(Request $request)
    {
        return view('admin.dashboard');
    }
}
