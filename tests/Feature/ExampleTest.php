<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_a_category()
    {
        $response = $this->postJson('/api/v1/categories', []);
        $response->assertStatus(201);
    }
}
