<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\orders as tblOrders;
use Exception;

class table extends Controller
{
    //
    public function main(Request $request){
        try{
            $Config = new Config;

            $src = '%' . trim($request->search) . '%';
            $page = trim($request->page);
            $uid = trim($request->uid);

            $getData = tblOrders::from('orders as o')
            ->select(
                'o.id', 'o.code', 'o.invoice', 'o.created_at', 'o.address', 'o.notes', 'o.total', 'o.payment_metode', 'o.paid_status',
                'o.user_id', 'u.name as user_name', 'u.email as user_email'
            )
            ->leftJoin('users as u', function($join){
                $join->on('u.id', '=', 'o.user_id');
            })
            ->where([
                ['o.invoice', 'LIKE', $src]
            ]);
            if( $uid != "-1"){
                $getData = $getData->where([
                    ['o.user_id', '=', $uid]
                ]);
            }

            $countData = $getData->count();

            if($countData == 0){
                $data = [
                    'message'   =>  'Data tidak ditemukan',
                    'code'      =>  404
                ];

                return response()->json($data, 404);
            }

            
            $getData = $getData->orderBy('o.created_at', 'desc')
            ->take($Config->table(['paging'=>$page])['paging_item'])
            ->skip($Config->table(['paging'=>$page])['paging_limit'])
            ->get();

            foreach($getData as $row){
                $list[] = [
                    'id'        =>  $row->id,
                    'code'      =>  $row->code,
                    'invoice'   =>  $row->invoice,
                    'user'      =>  [
                        'id'        =>  $row->user_id,
                        'name'      =>  $row->user_name,
                        'email'     =>  $row->user_email
                    ],
                    'address'   =>  $row->address,
                    'notes'     =>  $row->notes,
                    'date'      =>  $Config->timeAgo($row->created_at),
                    'payment'   =>  [
                        'status'        =>  (int)$row->paid_status,
                        'label'         =>  ($row->paid_status === 0 ? 'Waiting' : ($row->paid_status === 1 ? 'Paid' : 'Verif') ),
                        'bank'          =>  strtoupper($row->payment_metode),
                        'total'         =>  $row->total
                    ]
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
