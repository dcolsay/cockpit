<?php

namespace Dcolsay\Cockpit;

use Dcolsay\Cockpit\Components\Header;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CockpitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootResources();
        $this->bootBladeComponents();
    }

    private function bootResources(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'cockpit');

    }

    private function bootBladeComponents(): void
    {
        Blade::component('header', Header::class, 'pit');
    }
}
