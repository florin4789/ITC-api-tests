<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class Test extends TestCase
{
    public function test_a_basic_request()
    {
        $response = $this->get('test1');
        $response->assertStatus(200);

        $response->assertJsonCount(10, 'data');

        dd($data = json_decode($response->getContent()));


    }
}
