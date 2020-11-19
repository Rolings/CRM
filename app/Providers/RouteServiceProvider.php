<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    protected $adminNamespace = 'App\Http\Controllers\Admin';
    protected $frontNamespace = 'App\Http\Controllers\Front';
    protected $authNamespace = 'App\Http\Controllers\Auth';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapAdminRoutes();
        $this->mapAuthRoutes();
        $this->mapFrontRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::prefix(env('ADMIN_URL'))
            ->middleware('admin')
            ->namespace($this->adminNamespace)
            ->as('admin.')
            ->group(base_path('routes/admin.php'));
    }

    protected function mapAuthRoutes()
    {
        Route::prefix(env('ADMIN_URL'))
            ->middleware('web')
            ->namespace($this->authNamespace)
            ->as('admin.')
            ->group(base_path('routes/auth.php'));
    }

    protected function mapFrontRoutes()
    {
        Route::prefix('front')
            ->namespace($this->frontNamespace)
            ->as('front.')
            ->group(base_path('routes/front.php'));
    }
}
