<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\products as tblProducts;
use Exception;
use DB;
use Cookie;

class index extends Controller
{
    public function productPage(Request $request){
        try{
            $Config = new Config;
            $Account = null;

            if(Cookie::get('email')){

                $Account = new \App\Http\Controllers\account\manage;
                $Account = $Account->dataUser(Cookie::get('email'));
            }
            
            $data = [
                'TITLE'     =>  'Product ' . $Config->APPS()['NAME'],
                'APPS'       =>  $Config->APPS(),
                'account'   =>  $Account,
                'product'    =>  ''
            ];

            // dd($data);

            return view('home.product.index')->with($data);
            
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            dd($data);
        }
    }


    public function table(Request $request){
        $page = trim($request->page);

        $getData = $this->list(['page'=>$page]);

        // return $getData->
    }


    public function list(){

        $page = 1; //isset($request['page']) ? $request['page'] : 1;
        $Config = new Config;


        $getData = new tblProducts;
        $getData = $getData->orderBy('name', 'asc')
        ->take($Config->table(['paging'=>$page])['paging_item'])
        ->skip($Config->table(['paging'=>$page])['paging_limit'])
        ->get();

        return $getData;
    }
    //
    public function detail($request){
        $getData = tblProducts::where([
            'code'      =>  $request['code']
        ])->first();

        return $getData;
    }

    // VIEW 
    public function view(Request $request){
        try{

            $getData = tblProducts::where([
                'code'      =>  trim($request->code)
            ])
            ->first();

            //
            if($getData == null){
                $data = [
                    'message'   =>  'Data tidak ditemukan',
                    'code'      =>  404
                ];

                return response()->json($data, 404);
            }

            //
            $data = [
                'message'   =>  'Success',
                'codd'      =>  200,
                'data'      =>  $getData
            ];

            //
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
