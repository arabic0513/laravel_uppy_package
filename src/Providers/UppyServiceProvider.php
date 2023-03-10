<?php

namespace Arabic0513\Uppy\Providers;

use Illuminate\Support\ServiceProvider;

class UppyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../resources/views/components/' => base_path('resources/views/components'),
            __DIR__ . '/../View/Components/' => base_path('app/View/Components'),
            __DIR__ . '/../Http/Controllers/' => base_path('app/Http/Controllers'),
            __DIR__ . '/../config/' => base_path('config'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
