<?php

namespace MichaelOrenda\ApiResponse\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiResponseLogger
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (config('api-response.log_responses')) {
            Log::info('API Response', [
                'url'      => $request->fullUrl(),
                'method'   => $request->method(),
                'payload'  => $request->all(),
                'response' => json_decode($response->getContent(), true)
            ]);
        }

        return $response;
    }
}
