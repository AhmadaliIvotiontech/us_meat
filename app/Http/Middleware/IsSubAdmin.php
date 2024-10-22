<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class IsSubAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user(); 
        if(!$user)
        {
            return redirect('/admin');
        }
        elseif($user->role_id == 2)
        {
            return $next($request);
        }else{
            return back()->withErrors([
                'wrong_creden' => 'You are not authorized to access system. Please check with system providers.',
            ]);
        }
    }
}
