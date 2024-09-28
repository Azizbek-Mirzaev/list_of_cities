<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfCitySelected
{
    public function handle(Request $request, Closure $next): Response
    {
        $selectedCity = $request->session()->get('selected_city');

        if ($selectedCity && !$request->is("$selectedCity/*")) {
            return redirect("/{$selectedCity}");
        }

        return $next($request);
    }
}
