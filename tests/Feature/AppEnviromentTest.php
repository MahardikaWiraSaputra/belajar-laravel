<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\App;
// use Illuminate\Foundation\Application;

class AppEnviromentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAppEnv()
    {
        var_dump(App::environment());
        if(App::environment(['testing', 'prod', 'dev'])){
            self::assertTrue(true);
        }
    }
}
