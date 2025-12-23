<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::redirects('login', function () {
            if (auth()->check() && auth()->user()->is_admin) {
                return route('admin.dashboard');
            }

            return route('dashboard');
        });
    }
}
