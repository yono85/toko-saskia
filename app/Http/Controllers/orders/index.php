<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\User as tblUsers;
use App\Models\orders as tblOrders;
use App\Models\order_items as tblOrderItems;
use Illuminate\Support\Facades\Validator;
use Exception;
use DB;
use Cookie;

class index extends Controller
{
    //
    public function checkout(Request $request){
        try{

            $Config = new Config;
            
            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }


            // JIKA BELUM LOGIN
            // REDIRECT KE FRONT
            if($Account == null){
                return redirect('/login');
            }


            $checkOrder = $this->checkOrderUsers([
                'user_id'   =>  $Account->id
            ]);

            if( $checkOrder == null || $checkOrder->address == ""){
                return redirect('/');
            }
            
            $dataOrders = $this->dataOrders($checkOrder->code);


            $data = [
                'TITLE'     =>  'Checkout ',
                'APPS'      =>  $Config->APPS(),
                'account'   =>  $Account,
                'orders'    =>  $dataOrders
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

            $Config = new Config;

            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }


            // JIKA BELUM LOGIN
            // REDIRECT KE FRONT
            if($Account == null){
                return redirect('/login');
            }


            $checkOrder = $this->checkOrderUsers([
                'user_id'   =>  $Account->id
            ]);

            if( $checkOrder == null ){
                return redirect('/');
            }
            
            $dataOrders = $this->dataOrders($checkOrder->code);

            $data = [
                'TITLE'     =>  'Cart ',
                'APPS'      =>  $Config->APPS(),
                'account'   =>  $Account,
                'orders'    =>  $dataOrders
            ];

            // dd($data);

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

    public function success(Request $request){
        try{

            $Config = new Config;
            
            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }


            // JIKA BELUM LOGIN
            // REDIRECT KE FRONT
            if($Account == null){
                return redirect('/login');
            }


            // JIKA ORDER NULL 
            // MAKA REDIRECT KE FRONT
            $dataOrders = $this->dataOrders($request->q);

            // dd($dataOrders);
            
            if( $dataOrders == null || $dataOrders['payment']['status'] == "failed"){
                return redirect('/');
            }

            $data = [
                'TITLE'     =>  'Checkout ',
                'APPS'      =>  $Config->APPS(),
                'account'   =>  $Account,
                'orders'    =>  $dataOrders
            ];

            return view('orders.success')->with($data);
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            dd($data);
        }
    }

    // check orders
    public function checkOrderUsers($request){
        $check = tblOrders::where([
            'user_id'   =>  $request['user_id'],
            'paid_status'   =>  0,
            'status'    =>  1
        ])->first();

        return $check;
    }

    // DATA ORDERS
    public function dataOrders($request){
        try{

            $getOrders = tblOrders::where([
                'code'   =>  $request,
                'status'        =>  1
            ])
            ->first();
            
            if( $getOrders == null){
                return null;
            }

            // $items = null;

            $getItems = tblOrderItems::from("order_items as oi")
            ->select(
                'oi.id', 'oi.quantity', 'oi.total',
                'p.name as product_name', 'p.images as product_images'
            )
            ->leftJoin('products as p', function($join){
                $join->on('p.code', '=', 'oi.product_code');
            })
            ->where([
                'order_code'        =>  $getOrders->code,
                'status'            =>  1
            ])->get();

            // if(count($getItems) > 0){

            // }
            $data = [
                'id'        =>  $getOrders->id,
                'invoice'   =>  $getOrders->invoice,
                'code'      =>  $getOrders->code,
                'subtotal'  =>  $getOrders->subtotal,
                'total'     =>  $getOrders->total,
                'discount'  =>  $getOrders->discount,
                'address'   =>  $getOrders->address,
                'notes'     =>  $getOrders->notes,
                'payment'   =>  [
                    'metode'        =>  strtoupper($getOrders->payment_metode),
                    'status'        =>  $getOrders->paid_status === 0 ? "failed" : ($getOrders->paid_status === 1 ? "success" : "waiting")
                ],
                'items'     =>  json_decode($getItems),
                'status'    =>  $getOrders->status
            ];


            return $data;
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return $data;
        }
    }

}
