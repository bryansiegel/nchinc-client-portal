<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DocumentTest extends TestCase
{
    /**
     * Test Home
     *
     * @return void
     */
    // public function testHome()
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    //     $response->assertViewIs('dashboard');
    // }

    public function testDocumentsIndex()
    {
        $response = $this->get('documents/');

        $response->assertStatus(200);
    }
}
