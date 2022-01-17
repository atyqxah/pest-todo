<?php

/**namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**hijau
     * A basic test example.
     *
     * @return void
     */
    /**public function test_example()takhijau
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}*/
it('has welcome page')->get('/')->assertStatus(200);
