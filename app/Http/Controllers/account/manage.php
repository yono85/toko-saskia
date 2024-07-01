<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User as tblUsers;

class manage extends Controller
{



    //
    public function dataUser($request){
        $getData = tblUsers::where([
            'email' =>  $request
        ])->first();

        return $getData;
    }
}
