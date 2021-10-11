<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConversionControllerTest extends WebTestCase
{
    public function testConversionPoidsKiloToLivre() {
        $client = static::createClient();
        $client->request(
            'GET',
            '/poids/10/kilo'
        );
        $this->assertEquals("22.05",$client->getResponse()->getContent());
        $this->assertEquals(200,$client->getResponse()->getStatusCode());
    }

    public function testConversionPoidsLivreToKilos() {
        $client = static::createClient();
        $client->request(
            'GET',
            '/poids/22.05/livre'
        );
        $this->assertEquals("9.9773242630385",$client->getResponse()->getContent());
        $this->assertEquals(200,$client->getResponse()->getStatusCode());
    }

    public function testConversionTemperationCelciusToFaren() {
        $client = static::createClient();
        $client->request(
            'GET',
            '/celcius/20/celcius'
        );
        $this->assertEquals("68",$client->getResponse()->getContent());
        $this->assertEquals(200,$client->getResponse()->getStatusCode());
    }

    public function testConversionTemperationFarenToCelcius() {
        $client = static::createClient();
        $client->request(
            'GET',
            '/celcius/68/faren'
        );
        $this->assertEquals("5.7777777777778",$client->getResponse()->getContent());
        $this->assertEquals(200,$client->getResponse()->getStatusCode());
    }
}