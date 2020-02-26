<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Reader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
	 */
	function handle($request, Closure $next)
	{
		if (Auth::check() && Auth::user()->role == 'reader') {
			return $next($request);
		}
		elseif (Auth::check() && Auth::user()->role == 'moderator') {
			return redirect('/moderator');
		}
		elseif (Auth::check() && Auth::user()->role == 'writer') {
			return redirect('/writer');
		}
		else {
			return redirect('/admin');
		}
	}
}
