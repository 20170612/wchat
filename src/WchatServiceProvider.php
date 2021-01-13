<?php

namespace Xinyujian\Wchat;

use Illuminate\Support\ServiceProvider;

class WchatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 加载路由
        $this->loadRoutesFrom(__DIR__ . '/../routes/channels.php');
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
