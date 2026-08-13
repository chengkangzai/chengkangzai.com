<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CachePublicPages
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $request->isMethod('GET')) {
            return $response;
        }

        if ($request->is('admin*') || $request->is('livewire*')) {
            return $response;
        }

        if (auth()->check()) {
            return $response;
        }

        if ($response->getStatusCode() !== 200) {
            return $response;
        }

        foreach ($response->headers->getCookies() as $cookie) {
            $response->headers->removeCookie($cookie->getName(), $cookie->getPath(), $cookie->getDomain());
        }
        $response->headers->set('Cache-Control', 'public, max-age=3600, s-maxage=86400');

        return $response;
    }
}
