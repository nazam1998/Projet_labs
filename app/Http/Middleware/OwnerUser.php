<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class OwnerUser
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
        $comment=$request->route()->parameters()['comment'];
        if($comment->user_id==Auth::id()){
            return $next($request);
        }
        return redirect()->back();
    }
}
