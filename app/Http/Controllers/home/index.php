<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\User as tblUsers;
use App\Models\orders as tblOrders;
use Illuminate\Support\Facades\Validator;
use Exception;
use DB;
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
            }

            $data = [
                'TITLE'     =>  'Selamat datang di ' . $Config->APPS()['NAME'],
                'APPS'       =>  $Config->APPS(),
                'account'   =>  $Account,
                'orders'    =>  ''
            ];

            // dd($data);

            return view('users.index')->with($data);
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
