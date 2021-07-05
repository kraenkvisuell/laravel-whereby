<?php

namespace Kraenkvisuell\LaravelWhereby\Tests;

use Kraenkvisuell\LaravelWhereby\LaravelWherebyServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelWherebyServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
