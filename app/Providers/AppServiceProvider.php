<?php

namespace App\Providers;

use App\Auth\BasicEloquentUserProvider;
use App\Auth\SessionGuardExtended;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Auth::extend(
            'custom',
            function ($app) {
                $provider = new BasicEloquentUserProvider($app['hash'], config('auth.providers.users_admin.model'));
                return new SessionGuardExtended('custom', $provider, app()->make('session.store'), request());
            }
        );
    }
}
