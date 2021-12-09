<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ThirdTest extends TestCase
{

    public function test_3()
    {
        $response = $this->get('test3');
        $response->assertStatus(200);


        $json = $response->json('data');

        foreach ($json as $item) {
            $this->assertArrayHasKey('changed', $item);
            $this->assertTrue($item['changed'] !== null);
            $this->assertTrue($item['title'] == 'Italian Trade Agency');
            $this->assertTrue($item['country']['id'] !== null);
            $this->assertTrue($item['country']['iso2'] !== null);
            $this->assertTrue($item['country']['iso3'] !== null);
            $this->assertTrue($item['bso_types'][0]['name'] == 'Trade promotion organization (TPO)');
            $this->assertTrue($item['bso_types'][0]['id'] == 271);
        }

    }
}
