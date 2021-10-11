<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testGetHome() {
        $client = static::createClient();
        $client->request(
            'GET',
            '/home'
        );
        $this->assertEquals(200,$client->getResponse()->getStatusCode());
    }
}