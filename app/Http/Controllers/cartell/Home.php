<?php

namespace App\Http\Controllers\cartell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.cartell.home', ['pageConfigs' => $pageConfigs]);
  }
}
