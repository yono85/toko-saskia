<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\orders as tblOrders;
use App\Models\order_items as tblOrderItems;
use App\Models\products as tblProducts;
use Exception;

class manage extends Controller
{
    //
    public function main(Request $request){

        try{

            $checkout = $this->buy($request);
            // IF ERROR 
            if(isset($checkout['code'])){
                $data = [
                    'message'       =>  $checkout['message'],
                    'code'          =>  $checkout['code']
                ];
    
                return response()->json($data, $checkout['code']);
            }

            //
            $data = [
                'message'   =>  'success',
                'code'      =>  20,
                'data'      =>  [
                    'checkout'  =>  $checkout,
                    'redirect'  =>  $request->type_orders === "buy" ? "/checkout" : "/cart",
                ]
            ];
    
            return response()->json($data, 200);
        }
        catch(Exception $error){
            $data = [
                'message'       =>  $error->getMessage(),
                'code'          =>  500
            ];

            return response()->json($data, 500);
        }
        
    }


    public function buy($request){
        try{

            $Config = new Config;

            //CHECK
            $check = tblOrders::where([
                ['user_id', '=', trim($request->user_id)],
                ['paid_status', '=', 0],
                ['status', '=', 1]
            ])
            ->count();

            if( $check == 0 ){
                $filter = '%' . date('Y-m', time()) . '%';
                $count = tblOrders::where([
                    ['created_at', 'LIKE', $filter]
                ])->count();
                $count += 1;
    
                $codeOrders  = $Config->uniqCode(['label'=>'co']);
                //
                $Create     =   new tblOrders;
                $Create->code           =   $codeOrders;
                $Create->invoice        =   $Config->invoice( $count);
                $Create->user_id        =   trim($request->user_id);
                $Create->address        =   '';
                $Create->notes          =   '';
                $Create->subtotal       =   0;
                $Create->total          =   0;
                $Create->paid_status    =   0;
                $Create->payment_metode =   '';
                $Create->discount       =   0;
                $Create->status         =   1;
                $Create->save();

                // ADD ITEM PRODUCT
                $addItems = $this->addItems($request);
            }
            else{
                $addItems = $this->addItems($request);
            }


            $data = [
                'message'   =>  'success',
                'addItems'  =>  $addItems
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


    // CART
    public function cart($request){
        try{
            
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return $data;
        }
    }

    // ITEM ORDERS
    public function addItems($request){
        try{
            $checkOrders = tblOrders::where([
                ['user_id', '=', $request->user_id],
                ['paid_status', '=', 0],
                ['status', '=', 1]
            ])
            ->first();
    
            $price = trim($request->product_price);
            $quantity = trim($request->quantity);
            $total = ($price * $quantity);
    
            $checkItems = tblOrderItems::where([
                'order_code'      =>  $checkOrders->code,
                'product_code'        =>  $request->product_code,
                'status'            =>  1
            ])->first();
    
            if($checkItems == null){
                // create new
                $Create = new tblOrderItems;
                $Create->order_code = $checkOrders->code;
                $Create->product_code = trim($request->product_code);
                $Create->quantity = $quantity;
                $Create->price = $price;
                $Create->total = $total;
                $Create->status = 1;
                $Create->save();            
            }
            else{
                $quantity = ($quantity + $checkItems->quantity);
                $total = ($price * $quantity);

                // add quantity
                $update = tblOrderItems::where([
                    'order_code'        =>  $checkOrders->code,
                    'product_code'      =>  trim($request->product_code),
                    'status'            =>  1
                ])
                ->update([
                    'quantity'  =>  $quantity,
                    'total'     =>  $total
                ]);
            }

            // UPDATE TOTAL ORDERS
            $subTotal = tblOrderItems::where([
                'order_code'        =>  $checkOrders->code,
                'status'            =>  1
            ])->sum("total");

            $updateOrders = tblOrders::where([
                'code'        =>  $checkOrders->code
            ])->update([
                'subtotal'      =>  $subTotal,
                'total'         =>  $subTotal
            ]);

            $data = [
                'message'   =>  'success'
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

    //
    public function sendCheckout(Request $request){
        try{
            $update = tblOrders::where([
                'code'      =>  trim($request->order_code)
            ])
            ->update([
                'address'   =>  trim($request->address),
                'notes'     =>  trim($request->notes)
            ]);

            $data = [
                'message'   =>  'success',
                'code'      =>  200
            ];

            return response()->json($data, 200);
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return response()->json($data, 500);
        }
    }

    // 
    public function confrmCheckout(Request $request){
        try{
            
            $update = tblOrders::where([
                'code'      =>  trim($request->order_code)
            ])
            ->update([
                'paid_status'   =>  2,
                'payment_metode'     =>  trim($request->payment)
            ]);

            
            $data = [
                'message'   =>  'success',
                'code'      =>  200,
                'data'      =>  [
                    'redirect'      =>  '/checkout/success?q=' . $request->order_code
                ]
            ];

            return response()->json($data, 200);
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return response()->json($data, 500);
        }
    }
}
