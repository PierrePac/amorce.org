<?php

namespace App\DataFixtures;


use App\Entity\Photo;
use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PhotosFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies(): array {
        return [
            ProduitFixtures::class,
        ];
    }


    public function load(ObjectManager $manager): void
    {
        $this->creationPhoto('5030917298288', 'assets/media/produits/ps5/prochainement/produit_1_1.jpg', 1, $manager);
        $this->creationPhoto('5030917298288', 'assets/media/produits/ps5/prochainement/produit_1_2.jpg', 0, $manager);
        $this->creationPhoto('5030917298288', 'assets/media/produits/ps5/prochainement/produit_1_3.jpg', 0, $manager);
        $this->creationPhoto('5030917298288', 'assets/media/produits/ps5/prochainement/produit_1_4.jpg', 0, $manager);
        $this->creationPhoto('5030917298288', 'assets/media/produits/ps5/prochainement/produit_1_5.jpg', 0, $manager);

        $this->creationPhoto('5030941125093', 'assets/media/produits/ps5/prochainement/produit_2_1.jpg',1,$manager);
        $this->creationPhoto('5030941125093', 'assets/media/produits/ps5/prochainement/produit_2_2.jpg',0,$manager);
        $this->creationPhoto('5030941125093', 'assets/media/produits/ps5/prochainement/produit_2_3.jpg',0,$manager);
        $this->creationPhoto('5030941125093', 'assets/media/produits/ps5/prochainement/produit_2_4.jpg',0,$manager);
        $this->creationPhoto('5030941125093', 'assets/media/produits/ps5/prochainement/produit_2_5.jpg',0,$manager);

        $this->creationPhoto('5021290096592', 'assets/media/produits/ps5/prochainement/produit_3_1.jpg',1,$manager);
        $this->creationPhoto('5021290096592', 'assets/media/produits/ps5/prochainement/produit_3_2.jpg',0,$manager);
        $this->creationPhoto('5021290096592', 'assets/media/produits/ps5/prochainement/produit_3_3.jpg',0,$manager);
        $this->creationPhoto('5021290096592', 'assets/media/produits/ps5/prochainement/produit_3_4.jpg',0,$manager);
        $this->creationPhoto('5021290096592', 'assets/media/produits/ps5/prochainement/produit_3_5.jpg',0,$manager);

        $this->creationPhoto('5055060953303', 'assets/media/produits/ps5/prochainement/produit_4_1.jpg',1,$manager);
        $this->creationPhoto('5055060953303', 'assets/media/produits/ps5/prochainement/produit_4_2.jpg',0,$manager);
        $this->creationPhoto('5055060953303', 'assets/media/produits/ps5/prochainement/produit_4_3.jpg',0,$manager);
        $this->creationPhoto('5055060953303', 'assets/media/produits/ps5/prochainement/produit_4_4.jpg',0,$manager);
        $this->creationPhoto('5055060953303', 'assets/media/produits/ps5/prochainement/produit_4_5.jpg',0,$manager);

        $this->creationPhoto('3307216258384', 'assets/media/produits/ps5/prochainement/produit_5_1.jpg',1,$manager);
        $this->creationPhoto('3307216258384', 'assets/media/produits/ps5/prochainement/produit_5_2.jpg',0,$manager);
        $this->creationPhoto('3307216258384', 'assets/media/produits/ps5/prochainement/produit_5_3.jpg',0,$manager);
        $this->creationPhoto('3307216258384', 'assets/media/produits/ps5/prochainement/produit_5_4.jpg',0,$manager);
        $this->creationPhoto('3307216258384', 'assets/media/produits/ps5/prochainement/produit_5_5.jpg',0,$manager);

        $this->creationPhoto('5026555435055', 'assets/media/produits/ps5/jeux/produit_1_1.jpg',1,$manager);
        $this->creationPhoto('5026555435055', 'assets/media/produits/ps5/jeux/produit_1_2.jpg',0,$manager);
        $this->creationPhoto('5026555435055', 'assets/media/produits/ps5/jeux/produit_1_3.jpg',0,$manager);
        $this->creationPhoto('5026555435055', 'assets/media/produits/ps5/jeux/produit_1_4.jpg',0,$manager);
        $this->creationPhoto('5026555435055', 'assets/media/produits/ps5/jeux/produit_1_5.jpg',0,$manager);

        $this->creationPhoto('5060327536670', 'assets/media/produits/ps5/jeux/produit_2_1.jpg',1,$manager);
        $this->creationPhoto('5060327536670', 'assets/media/produits/ps5/jeux/produit_2_2.jpg',0,$manager);
        $this->creationPhoto('5060327536670', 'assets/media/produits/ps5/jeux/produit_2_3.jpg',0,$manager);
        $this->creationPhoto('5060327536670', 'assets/media/produits/ps5/jeux/produit_2_4.jpg',0,$manager);
        $this->creationPhoto('5060327536670', 'assets/media/produits/ps5/jeux/produit_2_5.jpg',0,$manager);

        $this->creationPhoto('4020628618490', 'assets/media/produits/ps5/jeux/produit_3_1.jpg',1,$manager);
        $this->creationPhoto('4020628618490', 'assets/media/produits/ps5/jeux/produit_3_2.jpg',0,$manager);
        $this->creationPhoto('4020628618490', 'assets/media/produits/ps5/jeux/produit_3_3.jpg',0,$manager);
        $this->creationPhoto('4020628618490', 'assets/media/produits/ps5/jeux/produit_3_4.jpg',0,$manager);
        $this->creationPhoto('4020628618490', 'assets/media/produits/ps5/jeux/produit_3_5.jpg',0,$manager);

        $this->creationPhoto('3512899959316', 'assets/media/produits/ps5/jeux/produit_4_1.jpg',1,$manager);
        $this->creationPhoto('3512899959316', 'assets/media/produits/ps5/jeux/produit_4_2.jpg',0,$manager);
        $this->creationPhoto('3512899959316', 'assets/media/produits/ps5/jeux/produit_4_3.jpg',0,$manager);
        $this->creationPhoto('3512899959316', 'assets/media/produits/ps5/jeux/produit_4_4.jpg',0,$manager);
        $this->creationPhoto('3512899959316', 'assets/media/produits/ps5/jeux/produit_4_5.jpg',0,$manager);

        $this->creationPhoto('3307216262053', 'assets/media/produits/ps5/jeux/produit_5_1.jpg',1,$manager);
        $this->creationPhoto('3307216262053', 'assets/media/produits/ps5/jeux/produit_5_2.jpg',0,$manager);
        $this->creationPhoto('3307216262053', 'assets/media/produits/ps5/jeux/produit_5_3.jpg',0,$manager);
        $this->creationPhoto('3307216262053', 'assets/media/produits/ps5/jeux/produit_5_4.jpg',0,$manager);
        $this->creationPhoto('3307216262053', 'assets/media/produits/ps5/jeux/produit_5_5.jpg',0,$manager);

        $this->creationPhoto('4020628673567', 'assets/media/produits/xbox_series/prochainement/produit_1_1.jpg',1,$manager);
        $this->creationPhoto('4020628673567', 'assets/media/produits/xbox_series/prochainement/produit_1_2.jpg',0,$manager);
        $this->creationPhoto('4020628673567', 'assets/media/produits/xbox_series/prochainement/produit_1_3.jpg',0,$manager);
        $this->creationPhoto('4020628673567', 'assets/media/produits/xbox_series/prochainement/produit_1_4.jpg',0,$manager);
        $this->creationPhoto('4020628673567', 'assets/media/produits/xbox_series/prochainement/produit_1_5.jpg',0,$manager);

        $this->creationPhoto('3701529503931', 'assets/media/produits/xbox_series/prochainement/produit_2_1.jpg',1,$manager);
        $this->creationPhoto('3701529503931', 'assets/media/produits/xbox_series/prochainement/produit_2_2.jpg',0,$manager);
        $this->creationPhoto('3701529503931', 'assets/media/produits/xbox_series/prochainement/produit_2_3.jpg',0,$manager);
        $this->creationPhoto('3701529503931', 'assets/media/produits/xbox_series/prochainement/produit_2_4.jpg',0,$manager);
        $this->creationPhoto('3701529503931', 'assets/media/produits/xbox_series/prochainement/produit_2_5.jpg',0,$manager);

        $this->creationPhoto('3512899965867', 'assets/media/produits/xbox_series/prochainement/produit_3_1.jpg',1,$manager);
        $this->creationPhoto('3512899965867', 'assets/media/produits/xbox_series/prochainement/produit_3_2.jpg',0,$manager);
        $this->creationPhoto('3512899965867', 'assets/media/produits/xbox_series/prochainement/produit_3_3.jpg',0,$manager);
        $this->creationPhoto('3512899965867', 'assets/media/produits/xbox_series/prochainement/produit_3_4.jpg',0,$manager);
        $this->creationPhoto('3512899965867', 'assets/media/produits/xbox_series/prochainement/produit_3_5.jpg',0,$manager);

        $this->creationPhoto('5016488140201', 'assets/media/produits/xbox_series/prochainement/produit_4_1.jpg',1,$manager);
        $this->creationPhoto('5016488140201', 'assets/media/produits/xbox_series/prochainement/produit_4_2.jpg',0,$manager);
        $this->creationPhoto('5016488140201', 'assets/media/produits/xbox_series/prochainement/produit_4_3.jpg',0,$manager);
        $this->creationPhoto('5016488140201', 'assets/media/produits/xbox_series/prochainement/produit_4_4.jpg',0,$manager);
        $this->creationPhoto('5016488140201', 'assets/media/produits/xbox_series/prochainement/produit_4_5.jpg',0,$manager);

        $this->creationPhoto('5026555367950', 'assets/media/produits/xbox_series/prochainement/produit_5_1.jpg',1,$manager);
        $this->creationPhoto('5026555367950', 'assets/media/produits/xbox_series/prochainement/produit_5_2.jpg',0,$manager);
        $this->creationPhoto('5026555367950', 'assets/media/produits/xbox_series/prochainement/produit_5_3.jpg',0,$manager);
        $this->creationPhoto('5026555367950', 'assets/media/produits/xbox_series/prochainement/produit_5_4.jpg',0,$manager);
        $this->creationPhoto('5026555367950', 'assets/media/produits/xbox_series/prochainement/produit_5_5.jpg',0,$manager);

        $this->creationPhoto('5055277049202', 'assets/media/produits/xbox_series/jeux/produit_1_1.jpg',1,$manager);
        $this->creationPhoto('5055277049202', 'assets/media/produits/xbox_series/jeux/produit_1_2.jpg',0,$manager);
        $this->creationPhoto('5055277049202', 'assets/media/produits/xbox_series/jeux/produit_1_3.jpg',0,$manager);
        $this->creationPhoto('5055277049202', 'assets/media/produits/xbox_series/jeux/produit_1_4.jpg',0,$manager);
        $this->creationPhoto('5055277049202', 'assets/media/produits/xbox_series/jeux/produit_1_5.jpg',0,$manager);

        $this->creationPhoto('3665962005356', 'assets/media/produits/xbox_series/jeux/produit_2_1.jpg',1,$manager);
        $this->creationPhoto('3665962005356', 'assets/media/produits/xbox_series/jeux/produit_2_2.jpg',0,$manager);
        $this->creationPhoto('3665962005356', 'assets/media/produits/xbox_series/jeux/produit_2_3.jpg',0,$manager);
        $this->creationPhoto('3665962005356', 'assets/media/produits/xbox_series/jeux/produit_2_4.jpg',0,$manager);
        $this->creationPhoto('3665962005356', 'assets/media/produits/xbox_series/jeux/produit_2_5.jpg',0,$manager);

        $this->creationPhoto('4020628617912', 'assets/media/produits/xbox_series/jeux/produit_3_1.jpg',1,$manager);
        $this->creationPhoto('4020628617912', 'assets/media/produits/xbox_series/jeux/produit_3_2.jpg',0,$manager);
        $this->creationPhoto('4020628617912', 'assets/media/produits/xbox_series/jeux/produit_3_3.jpg',0,$manager);
        $this->creationPhoto('4020628617912', 'assets/media/produits/xbox_series/jeux/produit_3_4.jpg',0,$manager);
        $this->creationPhoto('4020628617912', 'assets/media/produits/xbox_series/jeux/produit_3_5.jpg',0,$manager);

        $this->creationPhoto('3665962019711', 'assets/media/produits/xbox_series/jeux/produit_4_1.jpg',1,$manager);
        $this->creationPhoto('3665962019711', 'assets/media/produits/xbox_series/jeux/produit_4_2.jpg',0,$manager);
        $this->creationPhoto('3665962019711', 'assets/media/produits/xbox_series/jeux/produit_4_3.jpg',0,$manager);
        $this->creationPhoto('3665962019711', 'assets/media/produits/xbox_series/jeux/produit_4_4.jpg',0,$manager);
        $this->creationPhoto('3665962019711', 'assets/media/produits/xbox_series/jeux/produit_4_5.jpg',0,$manager);

        $this->creationPhoto('4020628681937', 'assets/media/produits/xbox_series/jeux/produit_5_1.jpg',1,$manager);
        $this->creationPhoto('4020628681937', 'assets/media/produits/xbox_series/jeux/produit_5_2.jpg',0,$manager);
        $this->creationPhoto('4020628681937', 'assets/media/produits/xbox_series/jeux/produit_5_3.jpg',0,$manager);
        $this->creationPhoto('4020628681937', 'assets/media/produits/xbox_series/jeux/produit_5_4.jpg',0,$manager);
        $this->creationPhoto('4020628681937', 'assets/media/produits/xbox_series/jeux/produit_5_5.jpg',0,$manager);


        $manager->flush();
    }
    
    public function creationPhoto(
        string $refProduit, 
        string $srcPhoto, 
        bool $majorPhoto, 
        ObjectManager $manager){

            $photo = new Photo();
            $photo->setRefProduit($manager->getRepository(Produit::class)->findOneBy(array("refProduit" => $refProduit)));
            $photo->setSrc($srcPhoto);
            $photo->setMajorPicture($majorPhoto);
            $manager->persist($photo);
    }

}
