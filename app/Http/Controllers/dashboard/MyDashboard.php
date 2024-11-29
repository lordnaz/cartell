<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyDashboard extends Controller
{
    //
    public function index()
    {
        return view('content.dashboard.my-dashboard');
    }

    public function bank_information(){
        return view('profile.bank-information');
    }
}
