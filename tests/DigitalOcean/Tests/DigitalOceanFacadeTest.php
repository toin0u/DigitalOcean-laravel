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
class DigitalOceanFacadeTest extends TestCase
{
    public function testDefaultAdapter()
    {
        $this->app['digitalocean'] = new MockDigitalOcean($this->app['digitalocean.credentials']);

        $this->assertInstanceOf('HttpAdapter\\CurlHttpAdapter', \DigitalOcean::getAdapter());
    }

    public function testSetAdapter()
    {
        $this->app['digitalocean'] = new MockDigitalOcean($this->app['digitalocean.credentials']);
        \DigitalOcean::setAdapter(new \HttpAdapter\BuzzHttpAdapter);

        $this->assertInstanceOf('HttpAdapter\\BuzzHttpAdapter', \DigitalOcean::getAdapter());
    }

    public function testDroplets()
    {
        $this->assertInstanceOf('DigitalOcean\\Droplets\\Droplets', \DigitalOcean::droplets());
    }

    public function testRegions()
    {
        $this->assertInstanceOf('DigitalOcean\\Regions\\Regions', \DigitalOcean::regions());
    }

    public function testImages()
    {
        $this->assertInstanceOf('DigitalOcean\\Images\\Images', \DigitalOcean::images());
    }

    public function testSizes()
    {
        $this->assertInstanceOf('DigitalOcean\\Sizes\\Sizes', \DigitalOcean::sizes());
    }

    public function testSSHKeys()
    {
        $this->assertInstanceOf('DigitalOcean\\SSHKeys\\SSHKeys', \DigitalOcean::sshKeys());
    }

    public function testDomains()
    {
        $this->assertInstanceOf('DigitalOcean\\Domains\\Domains', \DigitalOcean::domains());
    }
}
