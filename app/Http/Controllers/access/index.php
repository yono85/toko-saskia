<?php

namespace App\Http\Controllers\access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use Cookie;

class index extends Controller
{
    // LOGIN PAGE
    public function login(Request $request){
        $Config = new Config;

        $data = [
            'account'   =>  '',
            'APPS'      =>  $Config->APPS()
        ];

        return view('access.login')->with($data);
    }

    // SIGN UP
    public function signup(Request $request){
        $Config = new Config;

        $data = [
            'account'   =>  '',
            'APPS'      =>  $Config->APPS()
        ];
        return view('access.signup')->with($data);
    }

    public function loginadmin(Request $request){

        
        $Config = new Config;

        $data = [
            'account'   =>  '',
            'APPS'      =>  $Config->APPS()
        ];

        // dd($data);

        return view('access.loginadmin')->with($data);
    }
}
