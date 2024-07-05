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

    public function timeAgo($ptime)
    {

        $gettime = strtotime($ptime);
        $days = date('w', strtotime($ptime));
        $thisday = date('w', time());

        $estimate_time = time() - $gettime;
        if( $estimate_time < 1 )
        {
            return '1d lalu';
        }

        $condition = [ 
            12 * 30 * 24 * 60 * 60  =>  'thn',
            30 * 24 * 60 * 60       =>  'bln',
            24 * 60 * 60            =>  'hari',
            60 * 60                 =>  'j',
            60                      =>  'm',
            1                       =>  'd'
        ];

        foreach( $condition as $secs => $str )
        {
            $d = $estimate_time / $secs;

            $r = round($d);

            if( $d >= 1 )
            {
                    // $r = round( $d );
                // return ' ' . $r . $str;
                
                if( $str == 'm' || $str == 'd')
                {   
                    return $r . $str . ' lalu';
                }
                elseif( $str == 'j' )
                {
                    if( $r < 4 )
                    {
                        return $r . $str . ' lalu';
                    }
                    else
                    {
                        if( $days < $thisday)
                        {
                            return 'Kemarin, ' . date('H.i', $gettime);
                        }
                        else
                        {
                            return date('H.i', $gettime);
                        }
                    }
                }
                elseif( $str == 'hari' && $r < 7)
                {
                    if( $r > 1 )
                    {
                        return $this->namahari($ptime) . ', ' . date('H:i', $gettime);
                    }
                    else
                    {
                        return 'Kemarin, ' . date('H.i', $gettime);
                    }
                    
                }
                else
                {
                    return date('d/m/Y', $gettime);

                }

            }
        }

    } 


}
