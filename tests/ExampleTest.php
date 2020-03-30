<?php

namespace Ayorindecodes\RequestLogger\Tests;

use Ayorindecodes\Requestlogger\RequestLoggerServiceProvider;
use Orchestra\Testbench\TestCase;


class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [RequestLoggerServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function testRequestLoggerWorks()
    {
        $response= $this->json(
            'GET',
            '/request_logger'
        );

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'success'
            ]
        );
    }
}
