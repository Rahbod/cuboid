<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        $views = [
            'main_site.pages.home',
        ];
        View::composer($views,'App\Http\View\Composer\Menus');
    }

    public function register()
    {
        //
    }

}