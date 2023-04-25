<?php

namespace App\DataFixtures;

use App\Entity\Fournisseur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker;

class FournisseurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($four = 1; $four <= 15; $four++) {
            $fournisseur = new Fournisseur();
            $fournisseur->setRefFournisseur($faker->ean8);
            $fournisseur->setNomination($faker->company());
            $manager->persist($fournisseur);
            $this->addReference('four-'.$four, $fournisseur);
        }


        $manager->flush();
    }

    public function creationFournisseur(
        string $ref_fournisseur,
        string $nomination,
        ObjectManager $manager
    ) {
        $fournisseur = new Fournisseur();
        $fournisseur->setRefFournisseur($ref_fournisseur);
        $fournisseur->setNomination($nomination);
        $manager->persist($fournisseur);
    }
}
