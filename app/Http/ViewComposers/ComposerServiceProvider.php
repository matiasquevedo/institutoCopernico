<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\ServiceProvider;
use App\Page;


class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {


        view()->composer('layouts.nav', function ($view) {
            //
            $pages = Page::where('state','1')->where('nav','1')->get();
            // dd($pages);
            $view->with("pages",$pages);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}