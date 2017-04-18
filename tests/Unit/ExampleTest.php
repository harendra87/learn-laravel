<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void$request->fingerprint()
     */
    public function testBasicTest()
    {

        $this->visit('/');
        $this->see("Bootstrap");
    }


} 
