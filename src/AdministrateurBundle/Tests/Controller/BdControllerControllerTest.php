<?php

namespace AdministrateurBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BdControllerControllerTest extends WebTestCase
{
    public function testCreervariure()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Bd/CreerVariure');
    }

}
