<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

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

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

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

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
        
        $routes = collect(\Route::getRoutes())->map(function ($route) { 
            if (\Str::contains($route->uri, 'shopping')) {
                $uri = str_replace('shopping', 'products',  $route->uri);
            }
            ((new Router)->newRoute($route->methods, $route->uri, $route->action))
                    ->setRouter($this)
                    ->setContainer($this->container);

        });

        // Illuminate\Routing\Router.php
       // dd($routes);
       // $d = [];
       // $da = [];
       // foreach (Route::getRoutes()->get() as $key => $value) {
       //     $d['url'][] = $value->uri;
       //     $d['action'][] = $value->getActionName();
       // }
    }
    /* 
    protected function removeIndexPHPFromURL()
    {
        if (\Str::contains(request()->getRequestUri(), '/shop')) {
            $url = str_replace('shop', 'product', request()->getRequestUri());
  
            if (strlen($url) > 0) {
                header("Location: $url", true, 301);
                exit;
            }
        }
    }

    public function newRoute($methods, $uri, $action)
    {
        dd(\DB::table('page_settings')->get());
        if (\Str::contains($uri, 'shopping')) {
            $uri = str_replace('shopping', 'products', $uri);
        }
        return (new Route($methods, $uri, $action))
                    ->setRouter($this)
                    ->setContainer($this->container);
    }
    */
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
}
