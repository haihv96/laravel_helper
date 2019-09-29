<?php

namespace PhpMod\LaravelHelper;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $helperDirs = glob(app_path('Vendor/PhpMod/LaravelHelper/*.php'));
        if (!empty($publishHelperPaths)) {
            $helperDirs = glob(__DIR__ . '/helpers/*.php');
        }
        foreach ($helperDirs as $helperDir) {
            require_once($helperDir);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/helpers/' => app_path('Vendor/PhpMod/LaravelHelper/')
        ]);
    }
}
