<?php

namespace App\Tests;

use App\Entity\Demo;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testDemo()
    {
        $demo = new Demo();

        $demo->setDemo('demo');

        $this->assertTrue($demo->getDemo() === 'demo');
    }
}

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FunctionalTest extends WebTestCase
{
    public function testShouldDisplayDemoIndex()
    {
        $client = static::createClient();
        $client->followRedirects();
        $crawler = $client->request('GET', '/demo');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Demo index');
    }
}


public function testShouldDisplayCreateNewDemo()
    {
        $client = static::createClient();
        $client->followRedirects();
        $crawler = $client->request('GET', '/demo/new');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Create new Demo');
    }


public function testShouldAddNewDemo()
    {
        $client = static::createClient();
        $client->followRedirects();
        $crawler = $client->request('GET', '/demo/new');

        $buttonCrawlerNode = $crawler->selectButton('Save');

        $form = $buttonCrawlerNode->form();

        $uuid = uniqid();

        $form = $buttonCrawlerNode->form([
            'demo[demo]'    => 'Add Demo For Test' . $uuid,
        ]);

        $client->submit($form);

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Add Demo For Test' . $uuid);
}