<?php

namespace LPMatrix\LaravelPayant\Tests;

use Orchestra\Testbench\TestCase;
use LPMatrix\LaravelPayant\LaravelPayantServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPayantServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
