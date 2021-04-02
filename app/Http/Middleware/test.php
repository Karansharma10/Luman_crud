<?php
namespace App\Http\Middleware;
session_start();

use Closure;

class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($_SESSION['isLogin'] == true){
            $response = $next($request);
            return $response;
        }else{
            return redirect('/');
        }     
    }
}