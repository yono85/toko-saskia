<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\products as tblProducts;
use Exception;
use DB;

class manage extends Controller
{
    //
    public function main(Request $request){
        try{
            
            $code = trim($request->code);

            if($code == ""){
                $add = $this->addNew($request);
                
                return $add;
            }


            $update = $this->update($request);
            
            return $update;
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return response()->json($data, 500);
        }
    }

    public function addNew($request){
        try{
            $Config = new Config;

            
            $Create = new tblProducts;
            $Create->code = $Config->uniqCode(['label'=>'pd']);
            $Create->name = trim($request->name);
            $Create->quantity = trim($request->stock);
            $Create->price = trim($request->price);
            $Create->description = trim($request->description);
            $Create->images = $this->upload($request);
            $Create->save();

            $data = [
                'message'   =>  'Produk berhasil ditambahkan',
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

    public function update($request){
        try{
            $update = DB::table('products')
            ->where([
                'code'      =>  trim($request->code)
            ])
            ->update([
                'name'      =>  trim($request->name),
                'price'     =>  trim($request->price),
                'quantity'  =>  trim($request->stock),
                'description'   =>  trim($request->description)
            ]);

            // if update images
            if( $request->file('file') ){
                $update = DB::table('products')
                ->where([
                    'code'      =>  trim($request->code)
                ])
                ->update([
                    'images'    =>  $this->upload($request)
                ]);
            }

            $data = [
                'message'   =>  'Produk berhasil disunting',
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

    public function upload($request){
        $file = $request->file('file');
        $fileName = 'pd_' . time() . '.jpg';

        $filePath = '/images/product';
        $uplaod = $file->move(public_path() . $filePath,$fileName);

        return $filePath . '/' . $fileName;
    }
}
