<?php

namespace MichaelBusam\Boilerplate\Test;

use Illuminate\Support\Facades\Artisan;
use MichaelBusam\Boilerplate\BoilerplateServiceProvider;
use MichaelBusam\Boilerplate\Test\TestCase as TestCase;

class CommandTest extends TestCase
{
    /**
     * Setup
     */
    public function setUp() :void
    {
        parent::setUp();
    }

    /** @test */
    public function it_can_run_the_boilerplate_test_command()
    {
        Artisan::call('boilerplate:test');

        $this->assertTrue(true);
    }

}