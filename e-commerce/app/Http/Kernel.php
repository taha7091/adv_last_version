<?php

namespace App\Http;

use App\Http\Middleware\IsAdmin;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // Your global middleware here
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Your web group middleware here
        ],

        'api' => [
            // Your API group middleware here
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Register the middleware for the 'admin' route group
        'admin' => IsAdmin::class,
    ];
}
