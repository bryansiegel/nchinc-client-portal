<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testAuth extends TestCase
{
    /**
     * Test Login
     *
     * @return void
     */
    public function testLogin()
    {
        $response = $this->get('login/');
        $response->assertStatus(200);
    }


}
