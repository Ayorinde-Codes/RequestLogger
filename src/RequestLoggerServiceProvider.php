<?php

namespace Ayorindecodes\Requestlogger;

use Ayorindecodes\Requestlogger\Middleware\RequestLoggerMiddleware;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class RequestLoggerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     * @param Router $router
     */
    public function boot(Router $router)
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations' );

        $router->aliasMiddleware('logger_request', RequestLoggerMiddleware::class);
    }
}
