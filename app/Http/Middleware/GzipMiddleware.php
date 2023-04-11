<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GzipMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Vérifier si la compression est supportée par le client
        if (strpos($request->header('Accept-Encoding'), 'gzip') !== false) {
            // Compresser la réponse avec Gzip
            $gzipContent = gzencode($response->getContent(), 9);
            
            // Ajouter les en-têtes de la réponse
            $response->setContent($gzipContent)
                     ->header('Content-Encoding', 'gzip')
                     ->header('Content-Length', strlen($gzipContent));
        }

        return $response;
    }
}


