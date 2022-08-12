<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin{

    public function handle(Request $request, Closure $next){

        if(auth()->user()->is_admin==1){
            return $next($request);
        }else{
            return redirect('home')->with('error','you have no admin access.');
        }
    }
}