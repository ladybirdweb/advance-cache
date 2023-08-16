<?php

namespace CacheDriver\Providers;

use Carbon\Laravel\ServiceProvider;

class CacheServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/' . 'config.php', 'adCache');
    }
}