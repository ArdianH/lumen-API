<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class HelloMiddleware
{
	public function handle(Request $request, Closure $next)
	{
		if (preg_match('/balrog$/i', $request->getREquestUri())) {
			return response('You Shall NOT PASS!', 403);
		}
		
		return $next($request);
	}
}