<?php

namespace App\Http\Controllers\access;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\config\globals as Config;
use App\Models\User as tblUsers;
use Illuminate\Support\Facades\Validator;
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
                        'field'         =>  'email',
                        'message'       =>  'Email tidak terdaftar'
                    ],
                    'code'      =>  401,
                    'email'     =>  $email
                ];

                return response()->json($data, 401);

            }


            $checkPassword = (Hash::check($password, $check->password) ? 1 : 0);

            if($checkPassword == 0){
                $data = [
                    'error' =>  [
                        'field'         =>  'password',
                        'message'       =>  'Password salah!'
                    ],
                    'code'      =>  401
                ];

                return response()->json($data, 401);
            }


            // check akses level
            if($level != $check->level){
                $data = [
                    'error' =>  [
                        'field'         =>  'email',
                        'message'       =>  'Akses anda tidak disini!'
                    ],
                    'code'      =>  401,
                    'email'     =>  $email
                ];

                return response()->json($data, 401);
            }

            // return response()->json("oke", 200);

            Cookie::queue('email', $email, 120);
            
            // create session   å

            // if($level == 2){
            //     return redirect('/');
            // }

            // return redirect('/admin/home');

            $data = [
                'message'       =>  'success',
                'code'          =>  200,
                'data'          =>  [
                    'redirect'      =>  $level === 2 ? '/' : '/admin/home'
                ]
            ];

            return response()->json($data,200);
            

        }
        catch(Exception $error){
            $data = [
                'message'       =>  $error->getMessage(),
                'code'          =>  500
            ];

            return response()->json($data, 500);
            dd($data);
        }
        
    }

    // sign up users
    public function signup(Request $request){
        try{
            $Config = new Config;

            $messages = [
                "name.required" => "Name tidak boleh kosong",
                "name.min" => "Nama sekurangnya 3 karakter",
                "email.email" => "Penulisan email tidak valid",
                "email.unique" => "Email sudah terdaftar",
                "password.required" => "Password is required",
                "password.min" => "Password sekurangnya 6 karakter",
                "password.max" => "Password maksimal 16 karakter"
            ];
            
            // validate the form data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:16'
            ], $messages);
            

            if ($validator->fails()) {
                
                $data = [
                    'code'  =>  401,
                    'message'   =>  $validator->errors()
                ];

                return response()->json($data, 401);

            }

            $users = new tblUsers;
            $users->fill($request->all());
            $users->password   = Hash::make(trim($request->password));
            $users->save();


            Cookie::queue('email', trim($request->email), 120);

            $data = [
                'message'   =>  'Success',
                'code'      =>  200,
                'data'      =>  [
                    'redirect'  =>  '/'
                ]
            ];


            return response()->json($data,200);
        }
        catch(Exception $error){
            $data = [
                'message'   =>  $error->getMessage(),
                'code'      =>  500
            ];

            return response()->json($data,500);
        }
    }

    // logout
    public function logout(Request $request){
        try{
            
            $email = Cookie::get('email');


            // dd($email);

            $check = tblUsers::where([
                'email' =>  $email
            ])->first();

            // DELETE COOKIE
            $level = $check->level;

            // dd($level);

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
