<?php

namespace Modules\Admin\Base\Providers;

use Laracasts\Flash\FlashServiceProvider;
use DaveJamesMiller\Breadcrumbs\ServiceProvider as BreadcrumbsServiceProvider;
use Illuminate\Support\ServiceProvider;
use Config;

class BaseServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views/'.Config::get('admin.base.theme'), Config::get('admin.base.theme'));
        $this->app->setLocale(Config::get('admin.base.locale'));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Register dependency providers
        $this->app->register(FlashServiceProvider::class); // Admin flash messages
        $this->app->register(BreadcrumbsServiceProvider::class); // Bread crumbs

        // Register routes
        $this->app->register(RouteServiceProvider::class);
    }
}
