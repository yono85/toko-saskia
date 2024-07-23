<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use Exception;
use DB;
use Cookie;

class report extends Controller
{
    //
    public function main(Request $request){
        try{

            $data = [
                'message'   =>  'Success',
                'code'      =>  200,
                'data'      =>  [
                    'chart'  =>  $this->chartMain($request),
                    'card'      =>  [
                        'orders'    =>  $this->dataOrders($request)['data'],
                        'products'  =>  $this->dataProducts($request)['data']
                    ],
                    // 'cart'      =>  $this->chartDays($request)
                ]
            ];

            return response()->json($data, 200);
            
        }catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return response()->json($data, 500);
        }
    }

    public function dataOrders($request){
        try{
            
            $date = $this->changeDate($request->date);

            $getData = DB::table('orders as o')
            ->whereBetween('o.created_at', [$date['startDate'],$date['endDate']]);

            if( $request->uid != "-1"){
                $getData = $getData->where([
                    'o.user_id' =>  trim($request->uid)
                ]);
            }
            $getData = $getData->get();

            $totalOrder = 0; $totalCancel = 0;
            $totalPrice = 0; $cancelPrice = 0;

            foreach($getData as $row){
                if($row->status == 0){
                    $totalCancel += 1;
                    $cancelPrice = $cancelPrice + $row->total;
                }

                $totalOrder += 1;
                $totalPrice = $totalPrice + $row->total;
            }

            $data = [
                'message'       =>  'success',
                'code'          =>  200,
                'data'          =>  [
                    'success'       =>  [
                        'item'          =>  ($totalOrder - $totalCancel),
                        'price'         =>  ($totalPrice - $cancelPrice)
                    ],
                    'cancel'        =>  [
                        'item'          =>  $totalCancel,
                        'price'         =>  $cancelPrice
                    ]
                ]
            ];

            return $data;

        }catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return $data;
        }
    }


    public function dataProducts($request){
        try{

            $getData = DB::table('products')
            ->get();

            $active = 0; $nonactive = 0;
            $total = 0;
            foreach($getData as $row){

                if($row->quantity == 0){
                    $nonactive += 1;
                }

                $total += 1;
            }

            $data = [
                'message'   =>  'success',
                'code'      =>  200,
                'data'      =>  [
                    'total'           =>  $total,
                    'active'        =>  ($total - $nonactive),
                    'nonactive'     =>  $nonactive
                ]
            ];

            return $data;

        }catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return $data;
        }
    }

    function chartMain($request){
        $date = $this->changeDate($request->date);
        $start = date_create( $date["startDate"] );
        $end = date_create( $date["endDate"] );
        // $end = date_create(date('Y-m-d', strtotime($date["endDate"] . '+1 day') ) );

        $diff = date_diff($start, $end);
        if($diff->days > 1){
            return $this->chartDate($request);
        }

        return $this->chartDays($request);

    }

    public function chartDays($request){
        try{

            $date = $this->changeDate($request->date);

            $getData = DB::table('orders as o')
            ->where([
                'o.status'    =>  1
            ]);
            if($request->uid != "-1"){
                $getData = $getData->where([
                    'o.user_id' =>  trim($request->uid)
                ]);
            }
            $getData = $getData->whereBetween('o.created_at', [$date['startDate'], $date['endDate']]);

            $countData = $getData->count();

            $getChart = $getData->select(DB::raw('HOUR(o.created_at) as HOUR'), DB::raw('sum(total) as DAY') )
            ->groupBy('HOUR')
            ->get();

            $sumQr = 0;
            foreach($getChart as $row)
            {
                $listQr[] = [
                    "HOUR" => $row->HOUR,
                    "TOTAL" => $row->DAY
                ];
            
                $sumQr+= $row->DAY;
            }

            for($i=1;$i<25;$i++)
            {


                //array hour
                if( strlen($i) < 2)
                {
                    $ix = "".sprintf("%01s", $i) . "";
                }
                else
                {
                    $ix = $i . "";
                }


                //
                if( $countData > 0 )
                {
                    foreach($listQr as $arr)
                    {

                        $h_arr = $arr["HOUR"];
                        if(sprintf('%02d', $h_arr) == sprintf('%02d', $i))
                        {
                            $tlQr = $arr["TOTAL"]; break;
                        //  $rw = $rw[0]; break;
                        }
                        else
                        {
                            $tlQr = 0;
                        }

                    }

                    if( $listQr == null)
                    {
                        // $total[] = 0;
                        $totalQr = 0;
                    }
                    else
                    {
                        // $total[] = $rw;
                        $totalQr = $tlQr;
                    }
                }
                else
                {
                    $totalQr = 0;
                }


                $datex[] = 'j'.$ix;
                $totalx[] = $totalQr;
                //data
                $list[] = [
                    'Date'  =>  $ix,
                    'Total' =>  (int)$totalQr
                ];
                
                

            }

            $data = [
                // 'list'      =>  $list,
                'Date'      =>  $datex,
                'Total'     =>  $totalx
            ];

            return $data;
            // return response()->json($data, 200);
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return $data;
        }
    }

    public function chartDate($request)
    {

        $date = $this->changeDate($request->date);

        // $date = explode("_", $request->date);
        $start = date_create( $date["startDate"] );
        $end = date_create(date('Y-m-d', strtotime($date["endDate"] . '+1 day') ) );

        $diff = date_diff($start, $end);
        $diff = ( $diff->format("%a"));
   
        $getData = DB::table('orders as o')
        ->where([
            'o.status'    =>  1
        ]);
        if($request->uid != "-1"){
            $getData = $getData->where([
                'o.user_id' =>  trim($request->uid)
            ]);
        }
        $getData = $getData->whereBetween('o.created_at', [$date['startDate'], $date['endDate']]);

        $countData = $getData->count();

        $getChart = $getData->select(DB::raw('DAY(o.created_at) as DAY'), DB::raw('sum(total) as TOTAL') )
        ->groupBy('DAY')
        ->get();

        $sumQr = 0;
        foreach($getChart as $row)
        {
            $listQr[] = [
                "DAY" => $row->DAY,
                "TOTAL" => $row->TOTAL
            ];
        
            $sumQr+= $row->TOTAL;
        }


        for($i=0;$i<$diff;$i++)
        {

            //array days
            if( strlen($i) < 2)
            {
                $ix = "".sprintf("%01s", $i) . "";
            }
            else
            {
                $ix = $i . "";
            }

            $tanggal = date('d', strtotime($date['startDate'] . '+'.$i.' day' ) );
            $tgl2 = date('d/m', strtotime($date['startDate'] . '+'.$i.' day' ) );
            //
            if( $countData > 0 )
            {
                foreach($listQr as $arr)
                {

                    $h_arr = $arr["DAY"];
                    if(sprintf('%02d', $h_arr) == $tanggal )
                    {
                        $tlQr = $arr["TOTAL"]; break;
                    }
                    else
                    {
                        $tlQr = 0;
                    }

                }

                if( $listQr == null)
                {
                    $totalQr = 0;
                }
                else
                {
                    $totalQr = $tlQr;
                }
            }
            else
            {
                $totalQr = 0;
            }

            $datex[] = $tgl2;
            $totalx[] = (int)$totalQr;

            //data
            // $list[] = [
            //     'Date'  =>  $tgl2,
            //     'Total' =>  $totalQr
            // ];
        }

        $data = [
            // 'list'  =>  $list,
            'Date'  =>  $datex,
            'Total' =>  $totalx
        ];

        return $data;
    }

    public function changeDate($request)
    {

        if( trim($request) != null )
        {
            $date = explode("_", $request);
            $startDate = $date[0];
            $endDate = $date[1];
            $endDate = date('Y-m-d', strtotime($endDate . '+1 day') );
        } else
        {
            $startDate = date('Y-m-d', time());
            $endDate = date('Y-m-d', strtotime($startDate . '+1 day') );
        }

        return ['startDate'=>$startDate,'endDate'=>$endDate];
    }
}
