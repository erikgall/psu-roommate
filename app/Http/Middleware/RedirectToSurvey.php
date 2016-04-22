<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RedirectToSurvey
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::guard()->user()->responses()->count() < 18) {

            return redirect()->to('/survey');
        }

        return $next($request);
    }
}
