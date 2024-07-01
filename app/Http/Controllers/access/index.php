<?php

namespace App\Http\Controllers\access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    // LOGIN PAGE
    public function login(Request $request){
        $data = [
            'account'   =>  ''
        ];

        return view('access.login')->with($data);
    }

    // SIGN UP
    public function signup(Request $request){
        $data = [
            'account'   =>  ''
        ];

        return view('access.signup')->with($data);
    }

    public function loginadmin(Request $request){
        $data = [
            'account'   =>  ''
        ];

        return view('access.loginadmin')->with($data);
    }
}
