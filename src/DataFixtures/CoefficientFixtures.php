<?php

namespace App\DataFixtures;

use App\Entity\Coefficient;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class CoefficientFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $coefficient = new Coefficient();
        $coefficient->setCoefficient(20);
        $manager->persist($coefficient);

        $coefficient = new Coefficient();
        $coefficient->setCoefficient(5.2);
        $manager->persist($coefficient);

        $coefficient = new Coefficient();
        $coefficient->setCoefficient(10.7);
        $manager->persist($coefficient);

        $manager->flush();
    }
}
