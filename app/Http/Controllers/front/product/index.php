<?php

namespace App\Http\Controllers\front\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\User as tblUsers;
use Illuminate\Support\Facades\Validator;
use Exception;
use DB;
use Cookie;

class index extends Controller
{
    //
    public function list(Request $request){
        try{

            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }

            $data = [
                'account'   =>  $Account
            ];

            return view('front.product.index')->with($data);
        }
        catch(Exception $error){
            $data = [
                'message'       =>  $error->getMessage(),
                'code'          =>  500
            ];

            dd($data);
        }
    }


    public function detail(Request $request){
        try{

            $Config = new Config;


            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }

            // GET DETAIL PRODIUCT
            $getProductDetail = new \App\Http\Controllers\product\index;
            $getProductDetail = $getProductDetail->detail(['code'=>$Config->subURL()[4]]);

            // IF NOT FOUND CODE PRODUCT
            // if( $getProductDetail == null){
            //     return redirect('/');
            // }


            $getProduct = new \App\Http\Controllers\product\index;
            $getProduct = $getProduct->list();

            // DATA
            $data = [
                'TITLE'     =>  'Keranjang ' . $Config->APPS()['NAME'],
                'APPS'      =>  $Config->APPS(),
                'account'   =>  $Account,
                'product_detail'   =>  $getProductDetail,
                'product'           =>  $getProduct
            ];

            // dd($Account);
            return view('front.product.detail')->with($data);

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
