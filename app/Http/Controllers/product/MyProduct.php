<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyProduct extends Controller
{
    //
    public function index()
    {
        return view('content.product.my-product');
    }

    public function view_add_product()
    {
        return view('content.product.add-product');
    }
}
