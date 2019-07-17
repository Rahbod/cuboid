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
            'main_site.pages.about_us',
            'main_site.pages.contact_us',
            'main_site.pages.contents.contents',
            'main_site.pages.contents.contents_show',
            'main_site.pages.projects.projects',
            'main_site.pages.projects.projects_show',
        ];
        View::composer($views,'App\Http\View\Composer\Menus');
    }

    public function register()
    {
        //
    }

}