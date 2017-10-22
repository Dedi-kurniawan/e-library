<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Views\Composers\SidemenuComposer;
use Illuminate\Support\Facades\View;

class NavigasiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.sidemenu', SidemenuComposer::class);
        // view()->composer('module.ebook.index', SidemenuComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
