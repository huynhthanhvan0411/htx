<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrder(Request $request)
    {
        return view('admin.order.adminOrder');
    }
}