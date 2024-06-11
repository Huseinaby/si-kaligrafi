<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use App\Http\Middleware\AdminMiddleware;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Kernel $kernel): void
    {
        Paginator::useBootstrapFive();

        // Middleware untuk grup atau rute tertentu
        $router = $this->app['router'];
        $router->aliasMiddleware('admin', AdminMiddleware::class);
    }
}
