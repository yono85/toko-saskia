<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function main(Request $request){
        $data = [
            'Account'   =>  ''
        ];

        return view('admin.index')->with($data);
    }
}
