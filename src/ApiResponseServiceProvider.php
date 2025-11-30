<?php

namespace MichaelOrenda\ApiResponse;

use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/api-response.php' => config_path('api-response.php'),
        ], 'api-response-config');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/api-response.php',
            'api-response'
        );
    }

    public function register()
    {
        //
    }
}
