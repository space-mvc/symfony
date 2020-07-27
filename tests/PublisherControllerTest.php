<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();

        $client->request('GET', '/api/publishers');

        $data = json_decode($client->getResponse()->getContent(), 1)['data'];

        $this->assertEquals('Bart', $data[0]['firstName']);
        $this->assertEquals('Simpson', $data[0]['lastName']);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function d($data = [], $exit = false)
    {
        print '<pre>';
        print_r($data);
        print '</pre>';

        if($exit) {
            exit;
        }
    }
}