<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\products as tblProducts;
use Exception;

class table extends Controller
{
    //
    public function main(Request $request){
        try{
            $Config = new Config;

            $src = '%' . trim($request->search) . '%';
            $page = trim($request->page);

            $getData = tblProducts::from('products as p')
            ->select(
                'p.id', 'p.code', 'p.name', 'p.quantity', 'p.price', 'p.description', 'p.images', 'p.created_at'
            )
            ->where([
                ['p.name', 'LIKE', $src]
            ]);

            $countData = $getData->count();

            if($countData == 0){
                $data = [
                    'message'   =>  'Data tidak ditemukan',
                    'code'      =>  404
                ];

                return response()->json($data, 404);
            }

            
            $getData = $getData->orderBy('p.name', 'asc')
            ->take($Config->table(['paging'=>$page])['paging_item'])
            ->skip($Config->table(['paging'=>$page])['paging_limit'])
            ->get();

            foreach($getData as $row){
                $list[] = [
                    'id'        =>  $row->id,
                    'code'      =>  $row->code,
                    'name'      =>  $row->name,
                    'price'     =>  $row->price,
                    'quantity'  =>  $row->quantity,
                    'description'   =>  $row->description,
                    'images'        =>  $row->images === "" ? "/assets/images/none/product.png" : $row->images,
                    'date'      =>  $Config->timeAgo($row->created_at)
                ];
            }


            $data = [
                'message'   =>  'success',
                'data'      =>  [
                    'list'          =>  $list,
                    'page'          =>  (int)$page,
                    'countpage'     =>  ceil($countData / $Config->table(['paging'=>$page])['paging_item'] ),
                    'total'         =>  $countData
                ],
                'code'      =>  200
            ];

            return response()->json($data, 200);
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return response()->json($data, 200);
        }
    }
}
