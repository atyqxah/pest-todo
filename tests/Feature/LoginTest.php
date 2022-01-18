<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}**/

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_visitor_can_able_to_login()
    {
        $user = factory('App\User')->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/home');
    }
}
