<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Models\AnalyticModule\Analytics;

class MiscComingSoon extends Controller
{
  public function index(Request $request)
  {
    $public_ip = $request->ip();

    $type = 'subscribe_page_visit';

    $geo_location = Location::get($public_ip);

    $json_gl = response()->json($geo_location);

    $country_name = $json_gl->getData()->countryName;
    $region_name = $json_gl->getData()->regionName;
    $city_name = $json_gl->getData()->cityName;

    $new_visitor = Analytics::create([
      'analytics_type' => $type,
      'ip_address' => $public_ip,
      'country_name' => $country_name,
      'region_name' => $region_name,
      'city_name' => $city_name,
      'counters' => 1,
    ]);

    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.pages.pages-misc-comingsoon', ['pageConfigs' => $pageConfigs]);
  }
}
