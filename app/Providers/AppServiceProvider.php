<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Bouncer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Bouncer::seeder(function () {
            Bouncer::allow('available')->to('');
            Bouncer::allow('unavailable')->to('');

            Bouncer::allow('Agent')->to('');
            Bouncer::allow('Administrator')->to('');
            Bouncer::allow('Manager')->to('');
            Bouncer::allow('Custumer')->to('');
        });
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
