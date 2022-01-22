<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class socialController extends Controller
{
    //
    public function redirect($service){
        return Socialite::driver('facebook')->redirect();
    }
    public function callback($service){
        $user = Socialite::driver('facebook')->user();
        return response()->json($user);
    }

}
