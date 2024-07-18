<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\products as tblProducts;

use Cookie;
use Exception;
use DB;

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


            // data product
            $getProduct = new \App\Http\Controllers\product\index;
            $getProduct = $getProduct->list();

            
            $data = [
                'TITLE'     =>  'Selamat datang di',
                'APPS'      =>  $Config->APPS(),
                'account'   =>  $Account,
                'product'   =>  $getProduct
            ];

            return view('front.main')->with($data);
        }
        catch(Exception $error){
            $data = [
                'message'       =>  $error->getMessage(),
                'code'          =>  500
            ];

            dd($data);
        }
        
    }
}
