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
class DigitalOceanServiceProviderTest extends TestCase
{
    public function testCredentials()
    {
        $credentials = $this->app['digitalocean.credentials'];

        $this->assertInstanceOf('DigitalOcean\\Credentials', $credentials);
        $this->assertSame('YOUR_CLIENT_ID', $credentials->getClientId());
        $this->assertSame('YOUR_API_KEY', $credentials->getApiKey());

    }

    public function testDigitalOcean()
    {
        $this->assertInstanceOf('DigitalOcean\\DigitalOcean', $this->app['digitalocean']);
    }

    public function testDefaultAdapter()
    {
        $this->app['digitalocean'] = new MockDigitalOcean($this->app['digitalocean.credentials']);

        $this->assertInstanceOf('HttpAdapter\\CurlHttpAdapter', $this->app['digitalocean']->getAdapter());
    }

    public function testSetAdapter()
    {
        $this->app['digitalocean'] = new MockDigitalOcean($this->app['digitalocean.credentials']);
        $this->app['digitalocean']->setAdapter(new \HttpAdapter\BuzzHttpAdapter);

        $this->assertInstanceOf('HttpAdapter\\BuzzHttpAdapter', $this->app['digitalocean']->getAdapter());
    }

    public function testDroplets()
    {
        $this->assertInstanceOf('DigitalOcean\\Droplets\\Droplets', $this->app['digitalocean']->droplets());
    }

    public function testRegions()
    {
        $this->assertInstanceOf('DigitalOcean\\Regions\\Regions', $this->app['digitalocean']->regions());
    }

    public function testImages()
    {
        $this->assertInstanceOf('DigitalOcean\\Images\\Images', $this->app['digitalocean']->images());
    }

    public function testSizes()
    {
        $this->assertInstanceOf('DigitalOcean\\Sizes\\Sizes', $this->app['digitalocean']->sizes());
    }

    public function testSSHKeys()
    {
        $this->assertInstanceOf('DigitalOcean\\SSHKeys\\SSHKeys', $this->app['digitalocean']->sshKeys());
    }

    public function testDomains()
    {
        $this->assertInstanceOf('DigitalOcean\\Domains\\Domains', $this->app['digitalocean']->domains());
    }
}
