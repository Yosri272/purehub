<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use App;

class Language
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
     if(session()->has("lang_code")){
         App::setLocale(session()->get("lang_code"));
     }
     return $next($request);
 }
}