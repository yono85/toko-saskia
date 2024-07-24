<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\orders as tblOrders;
use App\Models\order_items as tblOrderItems;
use App\Models\products as tblProducts;
use Exception;
use DB;

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
                    'redirect'  =>  "/cart" //$request->type_orders === "buy" ? "/checkout" : "/cart",
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
                $Create->payment_bank =   '';
                $Create->payment_owner =   '';
                $Create->payment_norek =   '';
                $Create->payment_date =   '';
                $Create->payment_images =   '';
                $Create->paid_user_id   =   0;
                $Create->paid_date = '';
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

            // THIS FOR UPDATE TOTAL
            $updateTotal = $this->updateTotalOrders($checkOrders->codde);

            // UPDATE TOTAL ORDERS
            // $subTotal = tblOrderItems::where([
            //     'order_code'        =>  $checkOrders->code,
            //     'status'            =>  1
            // ])->sum("total");

            // $updateOrders = tblOrders::where([
            //     'code'        =>  $checkOrders->code
            // ])->update([
            //     'subtotal'      =>  $subTotal,
            //     'total'         =>  $subTotal
            // ]);

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
    public function updateTotalOrders($request){
        // UPDATE TOTAL ORDERS
        $code = $request;

        $subTotal = tblOrderItems::where([
            'order_code'        =>  $code,
            'status'            =>  1
        ])->sum("total");

        $updateOrders = tblOrders::where([
            'code'        =>  $code
        ])->update([
            'subtotal'      =>  $subTotal,
            'total'         =>  $subTotal
        ]);

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

    ///
    public function upload(Request $request){

        try{

            $file = $request->file("file");

            $filename = 'trf_' . trim($request->order_code) . '_' . time() . '.jpg';

            // $file = $request->file('fileimage');

            // this name
            // $thisname = 'test_' . time();

            // $extension = $file->getClientOriginalExtension(); // you can also use file name
            // $fileName = $thisname.'.jpg';
            $filepath = public_path().'/images/transfer';
            $uplaod = $file->move($filepath,$filename);



            $update = DB::table("orders")
            ->where([
                'code'    =>  trim($request->order_code)
            ])
            ->update([
                'payment_bank'  =>  trim($request->payment_bank),
                'payment_owner' =>  trim($request->payment_owner),
                'payment_norek' =>  trim($request->payment_norek),
                'payment_date'  =>  trim($request->payment_date),
                'payment_images'    =>  '/images/transfer/' . $filename //'/images/upload/tran' . $namefile . '.jpg'
            ]);
            //
            $data = [
                'message'   =>  'success',
                'code'      =>  20,
                'data'      =>  $request->file("file")
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

    // 
    public function verification(Request $request){
        try{

            $update = tblOrders::where([
                'code'  =>  trim($request->order_code)
            ])
            ->update([
                'paid_status'   =>  1,
                'paid_date'     =>  date('Y-m-d H:i:s', time()),
                'paid_user_id'  =>  trim($request->user_id)
            ]);

            $data = [
                'message'   =>  'Data berhasil diproses',
                'code'      =>  200,
                'data'      =>  ''
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

    // delete items cart
    public function deleteItem(Request $request){
        try{
            $item_id = trim($request->item_id);
            $code = trim($request->code);

            //
            $deleteItem = tblOrderItems::where([
                'id'        =>  $item_id
            ])
            ->update([
                'status'    =>  0
            ]);


            // update total
            $updateTotal = $this->updateTotalOrders($code);

            // update orders or remove
            $checkItem = tblOrderItems::where([
                'order_code'    =>  $code,
                'status'        =>  1
            ])->count();


            if($checkItem == 0){
                $deleteOrder = tblOrders::where([
                    'code'      =>  $code
                ])
                ->update([
                    'status'    =>  0
                ]);
            }


            $data = [
                'message'       =>  'Data berhasil dihapus',
                'code'          =>  200,
                'data'          =>  [
                    'redirect'      =>  $checkItem === 0 ? "true":"false"
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
