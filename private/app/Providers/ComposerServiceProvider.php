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

            'main_site.pages.contents.contents',//wrong
            'main_site.pages.contents.contents_show',//wrong

            'main_site.pages.content.contents',
            'main_site.pages.content.content_show',

            'main_site.pages.projects.projects',
            'main_site.pages.projects.projects_show',

            'main_site.pages.static_pages',
            'main_site.pages.faqs_index',
        ];
        View::composer($views,'App\Http\View\Composer\Menus');
    }

    public function register()
    {
        //
    }

}