<?php

namespace AdministrateurBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RechercheControllerTest extends WebTestCase
{
    public function testRecherche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/recherche');
    }

}
