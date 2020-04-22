<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class editArticle
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
        $article=$request->route()->parameters()['article'];
        if(Auth::user()->role_id==2||Auth::user()->role_id==3 && $article->user_id==Auth::id()){

            return $next($request);
        }
        return redirect()->back();
    }
}
