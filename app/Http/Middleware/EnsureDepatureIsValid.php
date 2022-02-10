<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureDepatureIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $departure_array = [null, 'palermo', 'catalina', 'roma', 'malino'];
        $departure = $request->departure;
        if (!in_array($departure, $departure_array)) {
            return redirect('/');
        }
        return $next($request);
    }
}
