<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebTest extends TestCase
{
    // vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
    public function testIsContactPageExists()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
