<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProviderBase;

class RouteServiceProvider extends ServiceProviderBase
{
    /**
     * Where to redirect users after login.
     */
    public const HOME = '/tasks';

    public function boot(): void
    {
        parent::boot();
    }
}
