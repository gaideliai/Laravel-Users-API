<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureApiKeyIsValid
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
        if ($request->query('api_key') !== config('services.api.api_key')) {
            abort(403, 'Invalid API key: You must use a valid key.');
        }

        return $next($request);
    }
}
