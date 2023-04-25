<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Entity\Stocker;
use App\Entity\Fournisseur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;

class StockerFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies(): array {
        return [
            ProduitFixtures::class,
            FournisseurFixtures::class,
        ];
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($stk = 1; $stk <= 15; $stk++) {
            $stock = new Stocker();
            $produit = $this->getReference('prod-'.rand(1, 20));
            $stock->setRefProduit($produit);
            $fournisseur = $this->getReference('four-'.rand(1, 15));
            $stock->setRefFournisseur($fournisseur);
            $stock->setQuantite($faker->numberBetween(0, 100));
            $manager->persist($stock);
        }



        $manager->flush();
    }

    public function creationStock(
        string $refProduit,
        string $refFournisseur,
        int $quantite,
        $manager
    ) {
        $stock = new Stocker();
        $stock->setRefProduit($manager->getRepository(Produit::class)->findOneBy(array("refProduit" => $refProduit)));
        $stock->setRefFournisseur($manager->getRepository(Fournisseur::class)->findOneBy(array("refFournisseur" => $refFournisseur)));
        $stock->setQuantite($quantite);
        $manager->persist($stock);
    }
}
