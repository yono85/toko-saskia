<?php

namespace App\Http\Controllers\orders;

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
    public function checkout(Request $request){
        try{

            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }


            // JIKA BELUM LOGIN
            // REDIRECT KE FRONT
            if($Account == null){
                return redirect('/');
            }


            // JIKA ORDER NULL 
            // MAKA REDIRECT KE FRONT
            $dataOrders = tblOrders::where([
                'user_id'   =>  $Account->id
            ]);

            if( $dataOrders->first() == null){
                return redirect('/');
            }

            $data = [
                'account'   =>  $Account,
                'orders'    =>  ''
            ];

            return view('orders.checkout')->with($data);
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            dd($data);
        }
    }

    public function cart(Request $request){
        try{
            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }


            // JIKA BELUM LOGIN
            // REDIRECT KE FRONT
            if($Account == null){
                return redirect('/');
            }


            // JIKA ORDER NULL 
            // MAKA REDIRECT KE FRONT
            $dataOrders = tblOrders::where([
                'user_id'   =>  $Account->id
            ]);

            if( $dataOrders->first() == null){
                return redirect('/');
            }

            $data = [
                'account'   =>  $Account,
                'orders'    =>  ''
            ];

            return view('orders.cart')->with($data);
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
