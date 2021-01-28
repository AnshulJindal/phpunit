<?php

namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testindexresponsecode()
    {
        $client = static::createClient();

        $client->request('GET','/index');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testindexresponsehtml()
    {
        $client = static::createClient();

        $client->request('GET','/index');

        $this->assertSelectorTextContains('html title', 'Welcome!');
    }
    public function testindextagcount()
    {
        $client = static::createClient();

        $crawler = $client->request('GET','/index');

        $this->assertCount(1, $crawler->filter('title'));
    }
    public function testform()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/form');
        $form = $crawler->selectButton('Save')->form();
        $form["task[Task]"] = "abc";
        $form["task[Date]"] = "1 jan 2010";
        $client->submit($form);
        $this->assertEquals(200,$client->getResponse()->getStatusCode());
        $this->assertGreaterThanOrEqual(0,$crawler->filter('h1')->count());
    }
}