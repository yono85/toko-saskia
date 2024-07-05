<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use Cookie;

class index extends Controller
{
    //
    public function main(Request $request){
        try{


            $Config = new Config;
            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }else{
                return redirect('/');
            }



            $data = [
                'TITLE'     =>  'Selamat datang di ' . $Config->APPS()['NAME'],
                'APPS'       =>  $Config->APPS(),
                'account'   =>  $Account,
                'orders'    =>  ''
            ];

            // dd($data);

            return view('home.main')->with($data);
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            dd($data);
        }
    }

    // orders
    public function orders(Request $request){
        try{
            $Config = new Config;
            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }
            
            $data = [
                'TITLE'     =>  'Pesanan ' . $Config->APPS()['NAME'],
                'APPS'       =>  $Config->APPS(),
                'account'   =>  $Account,
                'orders'    =>  ''
            ];

            // dd($data);

            return view('home.orders.index')->with($data);
            
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            dd($data);
        }
    }
}
