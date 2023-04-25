<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{

    public function __construct(private SluggerInterface $slugger){}
    private $counter = 1;
    public function load(ObjectManager $manager): void
    {
        $ps5 = $this->creationCategorie('Playstation 5', null, 'assets/media/categories/PS5.jpg', $manager);
        $this->creationCategorie('Nouveautés PS5', $ps5, null, $manager);
        $this->creationCategorie('Prochaines sorties PS5', $ps5, null, $manager);
        $this->creationCategorie('Jeux PS5', $ps5, null, $manager);
        $this->creationCategorie('Consoles PS5', $ps5, null, $manager);
        $this->creationCategorie('Accessoires PS5', $ps5, null, $manager);
        $ps4 = $this->creationCategorie('Playstation 4', null, 'assets/media/categories/PS4.jpg', $manager);
        $this->creationCategorie('Nouveautés PS4', $ps4, null, $manager);
        $this->creationCategorie('Prochaines sorties PS4', $ps4, null, $manager);
        $this->creationCategorie('Jeux PS4', $ps4, null, $manager);
        $this->creationCategorie('Consoles PS4', $ps4, null, $manager);
        $this->creationCategorie('Accessoires PS4', $ps4, null, $manager);
        $xboxSerie = $this->creationCategorie('Xbox Series', null, 'assets/media/categories/xbox_serie.jpg', $manager);
        $this->creationCategorie('Nouveautés Xbox Series', $xboxSerie, null, $manager);
        $this->creationCategorie('Prochaines sorties Xbox Series', $xboxSerie, null, $manager);
        $this->creationCategorie('Jeux Xbox Series', $xboxSerie, null, $manager);
        $this->creationCategorie('Consoles Xbox Series', $xboxSerie, null, $manager);
        $this->creationCategorie('Accessoires Xbox Series', $xboxSerie, null, $manager);
        $xboxOne = $this->creationCategorie('Xbox One', null, 'assets/media/categories/xbox_one.jpg', $manager);
        $this->creationCategorie('Nouveautés Xbox One', $xboxOne, null, $manager);
        $this->creationCategorie('Prochaines sorties Xbox One', $xboxOne, null, $manager);
        $this->creationCategorie('Jeux Xbox One', $xboxOne, null, $manager);
        $this->creationCategorie('Consoles Xbox One', $xboxOne, null, $manager);
        $this->creationCategorie('Accessoires Xbox One', $xboxOne, null, $manager);
        $switch = $this->creationCategorie('Switch', null, 'assets/media/categories/switch.jpg', $manager);
        $this->creationCategorie('Nouveautés Switch', $switch, null, $manager);
        $this->creationCategorie('Prochaines sorties Switch', $switch, null, $manager);
        $this->creationCategorie('Jeux Switch', $switch, null, $manager);
        $this->creationCategorie('Consoles Switch', $switch, null, $manager);
        $this->creationCategorie('Accessoires Switch', $switch, null, $manager);
        $pc = $this->creationCategorie('PC', null, 'assets/media/categories/pc.jpg', $manager);
        $this->creationCategorie('Nouveautés PC', $pc, null, $manager);
        $this->creationCategorie('Prochaines sorties PC', $pc, null, $manager);
        $this->creationCategorie('Jeux PC', $pc, null, $manager);
        $this->creationCategorie('Consoles PC', $pc, null, $manager);
        $this->creationCategorie('Accessoires PC', $pc, null, $manager);
        $retro = $this->creationCategorie('Retro', null, 'assets/media/categories/retro.jpg', $manager);
        $this->creationCategorie('Arcade', $retro, null, $manager);
        $this->creationCategorie('3DS/2DS/DS', $retro, null, $manager);
        $this->creationCategorie('PS3', $retro, null, $manager);
        $this->creationCategorie('Wii/Wii U', $retro, null, $manager);
        $this->creationCategorie('Xbox 360', $retro, null, $manager);
        $highTech = $this->creationCategorie('High-Tech', null, 'assets/media/categories/high_tech.jpg', $manager);
        $this->creationCategorie('Audio', $highTech, null, $manager);
        $this->creationCategorie('Microphones & Caméras', $highTech, null, $manager);
        $this->creationCategorie('TV & Ecrans', $highTech, null, $manager);


        $manager->flush();
    }

    public function creationCategorie(
        string $nomination, 
        Categorie $categorieParent = null, 
        string $image = null, 
        ObjectManager $manager)
        {
        $categorie = new Categorie();
        $categorie->setNomination($nomination);
        $categorie->setSlug($this->slugger->slug($nomination)->lower());
        $categorie->setSousCat($categorieParent);
        $categorie->setImage($image);
        $manager->persist($categorie);

        $this->addReference('cat-'.$this->counter, $categorie);
        $this->counter++;


        return $categorie;
    }
}
