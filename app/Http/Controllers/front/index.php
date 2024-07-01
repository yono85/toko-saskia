<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cookie;
class index extends Controller
{
    //
    public function main(Request $request){

        
        $Account = '';

        if(Cookie::get('email')){

            $Account = new \App\Http\Controllers\account\manage;
            $Account = $Account->dataUser(Cookie::get('email'));
        }

        $data = [
            'account'   =>  $Account
        ];

        // dd(Cookie::get('email'));

        return view('front.index')->with($data);
    }
}
