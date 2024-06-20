<?php

namespace App\Http\Controllers\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyOrder extends Controller
{
    //
    public function index()
    {
        return view('content.order.my-order');
    }
}
