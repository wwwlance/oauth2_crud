<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Customer;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Passport::actingAs(
            User::factory()->create(),
            ['*']
        );
    }

    public function test_can_list_customers()
    {
        $response = $this->getJson('v1/api/customers');
        $response->assertStatus(200);
    }

    // Add more tests for store, show, update, and destroy methods
}