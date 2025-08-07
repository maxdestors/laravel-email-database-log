<?php

namespace jeremykenedy\LaravelEmailDatabaseLog\Tests;

use jeremykenedy\LaravelEmailDatabaseLog\LaravelEmailDatabaseLogServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function getEnvironmentSetUp($app)
    {
        // import the migration
        include_once __DIR__.'/../src/Database/Migrations/2023_02_26_001638_create_email_log.php';

        // run the up() method of the migration class
        (new \CreateEmailLog)->up();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelEmailDatabaseLogServiceProvider::class,
        ];
    }
}
