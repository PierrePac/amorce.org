<?php

namespace App\DataFixtures;

use App\Entity\Commercial;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class CommercialFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $this->creationCommercial('bon', 'jean', 'particulier', $manager);

        $manager->flush();
    }

    public function creationCommercial(
        string $nom, 
        string $prenom, 
        string $specificite, 
        ObjectManager $manager)
        {
        $commercial = new Commercial();
        $commercial->setNom($nom);
        $commercial->setPrenom($prenom);
        $commercial->setSpecificite($specificite);

        $manager->persist($commercial);
    }
}
