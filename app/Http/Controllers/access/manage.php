<?php

namespace App\Http\Controllers\access;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User as tblUsers;
use Exception;
use DB;
use Cookie;

class manage extends Controller
{
    //
    public function login(Request $request){
        try{
            $level = (int)trim($request->level);
            $email = trim($request->email);
            $password = trim($request->password);



            $check = tblUsers::where([
                'email'     =>  $email
            ])->first();



            if( $check == null){
                $data = [
                    'error' =>  [
                        'message'       =>  'Email tidak terdaftar'
                    ],
                    'code'      =>  401
                ];

            }


            $checkPassword = (Hash::check($password, $check->password) ? 1 : 0);

            if($checkPassword == 0){
                $data = [
                    'error' =>  [
                        'message'       =>  'Password salah!'
                    ],
                    'code'      =>  401
                ];

                dd($data);
            }

            Cookie::queue('email', $email, 120);
            
            // create session   å

            if($level == 2){
                return redirect('/');
            }

            return redirect('/admin/home');
            

        }
        catch(Exception $error){
            $data = [
                'message'       =>  $error->getMessage(),
                'code'          =>  500
            ];

            dd($data);
        }
        
    }


    // logout
    public function logout(Request $request){
        try{
            
            $email = Cookie::get('email');

            $check = tblUsers::where([
                'email' =>  $email
            ])->first();

            // DELETE COOKIE
            $level = $check->level;
            \Cookie::queue(\Cookie::forget('email'));
            // dd($check->name);

            if($level == 1){

                return redirect('/admin');
            }

            return redirect('/');

        }
        catch(Exception $error){
            $data = [
                'message'       =>  $error->getMessage(),
                'code'          =>  500
            ];

            dd($data);
        }
    }
}
