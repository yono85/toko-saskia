<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\models\User as tblUsers;
use Cookie;

class CheckLogoutAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Cookie::get('email') == null){

            return redirect('/admin');
        }

        if( Cookie::get('email') != null){

            $getAccount = new \App\Http\Controllers\account\manage;
            $getAccount = $getAccount->dataUser(Cookie::get('email'));

            if($getAccount->level == 2){
                return redirect('/');
            }

        }

        return $next($request);
    }
}
