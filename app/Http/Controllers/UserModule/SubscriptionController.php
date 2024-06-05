<?php

namespace App\Http\Controllers\UserModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

use App\Models\UserModule\Subscribers;

class SubscriptionController extends Controller
{
    //

    public function new_subscription(Request $req){
        // return $req->input();
        // die();

        $email = Subscribers::where('email',$req->email_subscriber)->exists();

        $subscriber = $req->email_subscriber;

        if(!$email){

            $new_subscriber = Subscribers::create([
                'email' => $subscriber,
            ]);
            // /pages/misc-comingsoon-return
            $pageConfigs = ['myLayout' => 'blank'];

            $message = "for the subscibe.";

            return view('content.pages.pages-misc-comingsoon-return', ['pageConfigs' => $pageConfigs], compact('subscriber','message'));

        }else{
            $pageConfigs = ['myLayout' => 'blank'];

            $message = "you have already subscibed and show your interest.";

            return view('content.pages.pages-misc-comingsoon-return', ['pageConfigs' => $pageConfigs], compact('subscriber','message'));

            // return view('content.pages.pages-misc-comingsoon-return', compact('subscriber'));
        }
    }
}
