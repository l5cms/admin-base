<?php

/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 31.08.16
 * Time: 12:27
 */

namespace L5cms\Admin\Base;
use Illuminate\Support\ServiceProvider;

class InstallServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Publish
        $this->publishes([
            dirname(__DIR__).'/publish/config/base.php' => config_path('admin/base.php'),
        ], 'config');

        $this->publishes([
            dirname(__DIR__).'/publish/routes/base.php' => base_path('routes/admin/base.php'),
        ], 'routes');

        $this->publishes([
            dirname(__DIR__).'/publish/Controllers' => app_path('Http/Controllers/Admin'),
        ], 'controllers');

        $this->publishes([
            dirname(__DIR__).'/database/seeds/' => database_path('seeds')
        ], 'seeds');

        $this->publishes([
            dirname(__DIR__).'/assets' => public_path('theme/default'),
        ], 'public');
    }
}