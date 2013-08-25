<?php

/**
 * This file is part of the DigitalOcean-laravel library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOcean\Tests;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders()
    {
        return array(
            'Toin0u\DigitalOcean\DigitalOceanServiceProvider',
        );
    }

    protected function getPackageAliases()
    {
        return array(
            'DigitalOcean' => 'Toin0u\DigitalOcean\DigitalOceanFacade',
        );
    }
}

class MockDigitalOcean extends \DigitalOcean\DigitalOcean
{
    public function getAdapter()
    {
        return $this->adapter;
    }
}
