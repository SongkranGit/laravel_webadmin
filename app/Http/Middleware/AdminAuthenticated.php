<?php
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/17/2017
 * Time: 2:49 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminAuthenticated
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        //dump($user->name);
        if($user != null ){
            return $next($request);
        }else{
            return redirect()->intended('admin/login')->with('status', 'Please Login to access admin area');
        }
    }

}