<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class globals extends Controller
{
    // APPS
    public function APPS(){

        $data = [
            'NAME'      =>  env('APP_NAME'),
            'BASE_URL'  =>  $this->BASE_URL(),
            'ICON'      =>  '/assets/icon/logo-toko.png',
            'LOGO'      =>  '/assets/icon/logo-toko.png',
            'CREATED'   =>  '&copy; ' . date('Y')
        ];


        return $data;
    }

    // BASE URL
    public function BASE_URL()
    {
        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
        {
            $URI = 'https://' . $_SERVER['HTTP_HOST'];
        }
        else
        {
            $URI = 'http://' . $_SERVER['HTTP_HOST'];
        }

        return $URI;  
    }

    //
    public function uniqCode($request){
        $length = 8;
        $label = trim($request['label']);

        //
        $char = '123456789' . time();
        $charlength = strlen($char);
        $rand = '';

        //
        for ($i = 0; $i < $length; $i++)
        {
            $rand .= $char[rand(0, $charlength - 1)];
        }
        return $label . $rand;
    }


    public function table($request)
    {
        $item = 15;
        $limit = (( (int)$request['paging'] - 1) * $item);

        $data = [
            'paging_item'       =>  $item,
            'paging_limit'      =>  $limit,
            'paging'            =>  $request['paging']
        ];

        return $data;
    }

    //
    public function subURL(){
        $subURL = explode("/", url()->full());

        return $subURL;
    }

    //CREATE INVOICE    
    public function invoice($request){
        $length = sprintf('%03s', $request);
        $code = date('Ymd', time()) . "/" . $length . "/INV";

        return $code;

    }

}
