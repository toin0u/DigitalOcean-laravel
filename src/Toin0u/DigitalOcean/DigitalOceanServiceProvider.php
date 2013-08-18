<?php

/**
 * This file is part of the DigitalOcean-laravel library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Toin0u\DigitalOcean;

use Config;
use Illuminate\Support\ServiceProvider;
use DigitalOcean\Credentials;
use DigitalOcean\DigitalOcean;

/**
 * DigitalOcean service provider.
 *
 * @author Antoine Corcy <contact@sbin.dk>
 */
class DigitalOceanServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('toin0u/digitalocean-laravel');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['digitalocean.credentials'] = $this->app->share(function($app) {
            return new Credentials(
                Config::get('digitalocean-laravel::client_id'),
                Config::get('digitalocean-laravel::api_key')
            );
        });

        $this->app['digitalocean'] = $this->app->share(function($app) {
            return new DigitalOcean($app['digitalocean.credentials']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('digitalocean');
    }
}
