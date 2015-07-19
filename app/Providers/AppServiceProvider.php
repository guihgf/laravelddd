<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Application\Interfaces\IUsuarioApp', 'App\Application\UsuarioApp');
        $this->app->bind('App\Domain\Interfaces\Repositories\IUsuarioRepository', 'App\Infra\Repositories\UsuarioRepository');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
