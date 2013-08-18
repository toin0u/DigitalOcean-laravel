DigitalOcean for Lavarel 4
======================

This package allows you to use [**DigitalOcean**](https://github.com/toin0u/DigitalOcean) in [**Laravel 4**](http://laravel.com/).


Installation
------------

It can be found on [Packagist](https://packagist.org/packages/toin0u/geotools-laravel).
The recommended way is through [composer](http://getcomposer.org).

Edit `compose.json` and add:

```json
{
    "require": {
        "toin0u/digitalocean-laravel": "~0.1"
    }
}
```

And install dependecies:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install
```


Configuration
-------------

Find the `providers` key in `app/config/app.php` and register the **DigitalOcean Service Provider**.

```php
'providers' => array(
    // ...

    'Toin0u\DigitalOcean\DigitalOceanServiceProvider',
)
```

Find the `aliases` key in `app/config/app.php` and register the **DigitalOcean Facade**.

```php
'aliases' => array(
    // ...

    'DigitalOcean' => 'Toin0u\DigitalOcean\DigitalOceanFacade',
)
```

You need to copy the config file into your project by running:

```bash
$ php artisan config:publish toin0u/digitalocean-laravel
```

Finally you need to edit `app/config/packages/toin0u/digitalocean-laravel/config.php` with your **client ID**
and the **API Key**.


Usage
-----

n/a


Changelog
---------

[See the changelog file](https://github.com/toin0u/DigitalOcean-laravel/blob/master/CHANGELOG.md)


Support
-------

[Please open an issues in github](https://github.com/toin0u/DigitalOcean-laravel/issues)


License
-------

DigitalOcean-laravel is released under the MIT License. See the bundled
[LICENSE](https://github.com/toin0u/DigitalOcean-laravel/blob/master/LICENSE) file for details.
