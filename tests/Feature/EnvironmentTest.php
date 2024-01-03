<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetEnv(){
        $youtube = env('YOUTUBE');
        self::assertEquals('-',$youtube);
    }

    public function testDefaultEnv()
    {
        $author = Env('AUTHOR');
        self::assertEquals('Dika', $author);
    }
}
