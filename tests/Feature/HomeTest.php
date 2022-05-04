<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic test Home.
     *
     * @return void
     */
    public function test_Home()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
                 ->assertSeeText(['John Doe', 'initial_credits', '10', $escaped = true]);
                
    }
}
