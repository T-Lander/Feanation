<?php

namespace App\Http\Middleware;

use Closure;
use App\Rank;

class CheckAdmin
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
        if($request->user() === null)
        {
            return redirect('/login');
        }

        if($request->user()->rank_id == Rank::where('name', 'admin')->first()->id)
        {
            return $next($request);
        }

        return redirect('/login');
    }
}
