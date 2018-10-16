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



    public function test_filter_route(){
        $response = $this->get('/filter');
        $response->assertStatus(200);
    }

//    public function test_sort_route(){
//        $response = $this->get('/sort');
//        $response->assertStatus(200);
//    }

    public function test_details_route(){
        $response = $this->get('/details');
        $response->assertStatus(200);
    }
//    public function test_availability_route(){
//        $response = $this->get('/availability');
//        $response->assertStatus(200);
//    }
}
