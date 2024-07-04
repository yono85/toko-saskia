<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\products as tblProducts;
use Exception;

class index extends Controller
{
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
}
