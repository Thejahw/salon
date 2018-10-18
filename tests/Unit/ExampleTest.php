<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DatabaseMigrations;

class ExampleTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = factory(User::class)->make();
        $this->assertNotEmpty($user->last_name);

    }

    public function test_search_route(){
        $response = $this->get('/search');
        $response->assertStatus(200);
    }

    public function test_details_route(){
        $response = $this->get('/details');
        $response->assertStatus(200);
    }

    public function test_form_secondrySearch(){
        
    }

}
