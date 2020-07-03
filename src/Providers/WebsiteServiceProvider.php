<?php

namespace Blueplanet\Website\Providers;

use Illuminate\Support\ServiceProvider;

Class WebsiteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd('We are loading our package service provider');
    }

    public function register()
    {

    }
}
