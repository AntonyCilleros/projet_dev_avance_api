<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create languages, one for french and one for english
        $french = new Language();
        $french->setName('French');
        $french->setCode('fr');
        $french->setFlag('http://127.0.0.1:9090/img/flags/fr.png');
        $manager->persist($french);

        $english = new Language();
        $english->setName('English');
        $english->setCode('en');
        $english->setFlag('http://127.0.0.1:9090/img/flags/en.png');
        $manager->persist($english);

        $manager->flush();
    }
}
