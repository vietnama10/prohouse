<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(
            'customer.master.header',
            'App\Http\ViewComposers\MenuComposer'
        );
        view()->composer(
            ['admin.master.top-navbar', 'admin.master.left-sidebar'],
            'App\Http\ViewComposers\Admin\ProfileComposer'
        );
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
