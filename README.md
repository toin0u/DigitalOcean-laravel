DigitalOcean for Lavarel 4
==========================

The *version 2* of the API will be available soon!
Please visit [Laravel DigitalOcean](https://github.com/GrahamCampbell/Laravel-DigitalOcean) by [Graham Campbell](https://github.com/GrahamCampbell).

This package allows you to use [**DigitalOcean**](https://github.com/toin0u/DigitalOcean) in [**Laravel 4**](http://laravel.com/).

[![Latest Stable Version](https://poser.pugx.org/toin0u/DigitalOcean-laravel/v/stable.png)](https://packagist.org/packages/toin0u/DigitalOcean-laravel)
[![Total Downloads](https://poser.pugx.org/toin0u/DigitalOcean-laravel/downloads.png)](https://packagist.org/packages/toin0u/DigitalOcean-laravel)
[![Build Status](https://secure.travis-ci.org/toin0u/DigitalOcean-laravel.png)](http://travis-ci.org/toin0u/DigitalOcean-laravel)
[![Coverage Status](https://coveralls.io/repos/toin0u/DigitalOcean-laravel/badge.png)](https://coveralls.io/r/toin0u/DigitalOcean-laravel)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e0ddcf83-1a5c-45ee-a8fb-53de345eecfe/mini.png)](https://insight.sensiolabs.com/projects/e0ddcf83-1a5c-45ee-a8fb-53de345eecfe)


Installation
------------

It can be found on [Packagist](https://packagist.org/packages/toin0u/digitalocean-laravel).
The recommended way is through [composer](http://getcomposer.org).

Edit `compose.json` and add:

```json
{
    "require": {
        "toin0u/digitalocean-laravel": "0.2.*"
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

Use the [DigitalOcean API](https://github.com/toin0u/DigitalOcean#api):

```php
// if you don't want to use the defaut adapter but rather Buzz
DigitalOcean::setAdapter(new \HttpAdapter\BuzzHttpAdapter());
$activeDroplets = DigitalOcean::droplets()->showAllActive();
var_dump($activeDroplets);

// object(stdClass)[61]
// public 'status' => string 'OK' (length=2)
// public 'droplets' =>
//     array (size=1)
//         0 =>
//             object(stdClass)[62]
//                 public 'id' => int 347553
//                 public 'name' => string 'foobar' (length=6)
//                 public 'image_id' => int 284212
//                 public 'size_id' => int 66
//                 public 'region_id' => int 4
//                 public 'backups_active' => boolean false
//                 public 'ip_address' => string '192.241.175.217' (length=15)
//                 public 'private_ip_address' => null
//                 public 'locked' => boolean false
//                 public 'status' => string 'active' (length=6)
//                 public 'created_at' => string '2013-01-07T01:37:21Z' (length=20)
```


Changelog
---------

[See the changelog file](https://github.com/toin0u/DigitalOcean-laravel/blob/master/CHANGELOG.md)


Support
-------

[Please open an issues in github](https://github.com/toin0u/DigitalOcean-laravel/issues)


Contributor Code of Conduct
---------------------------

As contributors and maintainers of this project, we pledge to respect all people
who contribute through reporting issues, posting feature requests, updating
documentation, submitting pull requests or patches, and other activities.

We are committed to making participation in this project a harassment-free
experience for everyone, regardless of level of experience, gender, gender
identity and expression, sexual orientation, disability, personal appearance,
body size, race, age, or religion.

Examples of unacceptable behavior by participants include the use of sexual
language or imagery, derogatory comments or personal attacks, trolling, public
or private harassment, insults, or other unprofessional conduct.

Project maintainers have the right and responsibility to remove, edit, or reject
comments, commits, code, wiki edits, issues, and other contributions that are
not aligned to this Code of Conduct. Project maintainers who do not follow the
Code of Conduct may be removed from the project team.

Instances of abusive, harassing, or otherwise unacceptable behavior may be
reported by opening an issue or contacting one or more of the project
maintainers.

This Code of Conduct is adapted from the [Contributor
Covenant](http:contributor-covenant.org), version 1.0.0, available at
[http://contributor-covenant.org/version/1/0/0/](http://contributor-covenant.org/version/1/0/0/)


License
-------

DigitalOcean-laravel is released under the MIT License. See the bundled
[LICENSE](https://github.com/toin0u/DigitalOcean-laravel/blob/master/LICENSE) file for details.
