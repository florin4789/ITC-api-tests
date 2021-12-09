<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class FirstTest extends TestCase
{
    public function test_1()
    {
        $response = $this->get('test1');
        $response->assertStatus(200);

        $response->assertJsonCount(10, 'data');
        $json = $response->json('data');

        foreach($json as $item) {
            $this->assertArrayHasKey('name', $item);
            $this->assertArrayHasKey('field_iso2', $item);
            $this->assertArrayHasKey('field_iso3', $item);
            $this->assertTrue($item !== null);
        }
    }
}


