<?php

namespace Tests\Feature;

use Tests\TestCase;

class SecondTest extends TestCase
{
    public function test_2()
    {
        $response = $this->get('test2');
        $response->assertStatus(200);

        $response->assertJsonCount(10, 'data');

        $json = $response->json('data');

        foreach($json as $item) {
            $this->assertArrayHasKey('name', $item);
            $this->assertTrue($item['name'] !== null);
        }
    }

}
