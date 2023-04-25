<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;


class ProduitFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger){}
    private $counter = 1;
    public function load(ObjectManager $manager): void
    {
        $this->creationProduit('Prochaines sorties PS5', '5030917298288', 'Diablo IV PS5', 'LES ENFERS SE DÉCHAÎNENT… Lilith, la fille du Seigneur de la Haine Méphisto, est de retour. Le mal se répand et Sanctuaire est désormais menacé par des hordes de fanatiques venus célébrer son retour. Rares sont celles et ceux ayant le courage de se dresser sur leur chemin…', 79.99, $manager);
        $this->creationProduit('Prochaines sorties PS5', '5030941125093', 'Star Wars Jedi Survivor Deluxe Edition PS5 ', 'L\'histoire de Cal Kestis continue dans Star Wars Jedi: Survivor™, un jeu d\'action-aventure galactique à la troisième personne développé par Respawn Entertainment en collaboration avec Lucasfilm Games. Se déroulant 5 ans après les événements. ', 99.99, $manager);
        $this->creationProduit('Prochaines sorties PS5', '5021290096592', 'Final Fantasy XVI PS5 ', 'Dans un univers épique et crépusculaire teinté de fantasy, où le destin du royaume est régi par les puissants Primordiaux et les Émissaires capables de les contrôler ; découvrez l\'épopée du guerrier Clive Rosfield, Gardien de Rosalia ayant juré de protéger son jeune.', 79.99, $manager);
        $this->creationProduit('Prochaines sorties PS5', '5055060953303', 'Resident Evil 4 Remake PS5 ', 'out en préservant l\'essence du jeu original, Resident Evil 4 revient avec un gameplay modernisé, des graphismes ultra détaillés et un scénario réinterprété pour un survival horror de dernière génération où la vie et la mort,la peur et la catharsis se croisent.', 69.99, $manager);
        $this->creationProduit('Prochaines sorties PS5', '3307216258384', 'Assassin\'s Creed Mirage Edition Deluxe PS5 ', 'Découvrez l\'histoire de Basim, voleur à la tire habile cherchant des réponses et la justice dans les rues animées du Bagdad du IXe siècle. Par l\'intermédiaire d\'une société aussi ancienne que mystérieuse appelée Ceux qu\'on ne voit pas, il va devenir un tueur redoutable et son sort va prendre une tournure qu\'il n\'aurait jamais imaginée.', 59.99, $manager);
        $this->creationProduit('Jeux PS5', '5026555435055', 'Wwe 2k23 Edition Deluxe PS5 ', 'WWE 2K23 est Encore plus fort avec des fonctionnalités étendues, des graphismes exceptionnels et une liste impressionnante de Superstars et de Légendes de la WWE. 2K Showcase fait son retour avec un documentaire sportif interactif qui retrace les 20 ans de carrière de John Cena, et WarGames arrive enfin !', 99.99, $manager);
        $this->creationProduit('Jeux PS5', '5060327536670', 'Wo Long Fallen Dynasty PS5 ', 'Wo Long: Fallen Dynasty est une aventure riche en événements qui suit les péripéties d\'un milicien anonyme combattant pour survivre dans une version dark fantasy de la fin de la dynastie Han, où les démons tourmentent les trois royaumes. Le joueur affronte de dangereuses créatures et des soldats ennemis en se battant à l\’épée dans un style inspiré des arts martiaux chinois. Il devra surmonter les obstacles rencontrés en chemin en réveillant le pouvoir enfoui en lui.', 69.99, $manager);
        $this->creationProduit('Jeux PS5', '4020628618490', 'Scars Above PS5 ', 'Les choses ne se passent pas comme prévu, et le Métahédron téléporte l\'équipe à travers l\'espace jusqu\'à une mystérieuse planète en dehors de notre système stellaire. Vous incarnez le Dr Kate Ward, une des membres de l\'équipe SCAR, et vous vous réveillez seule et perdue dans un environnement étrange et hostile. Déterminée à survivre, vous vous lancez à la recherche du reste de l\'équipage, pour découvrir ce qui s\'est passé.', 29.99, $manager);
        $this->creationProduit('Jeux PS5', '3512899959316', 'Atomic Heart PS5 ', 'L’histoire d’Atomic Heart explore une version alternative des années 50 dans une Union soviétique qui développa la robotique et d’autres technologies avancées durant la Seconde Guerre mondiale. Ce monde est proche de nos idéaux actuels : une société heureuse où la science est reine, des villes parfaites remplies de parcs verts et de belles places ensoleillées, une vie quotidienne entièrement automatisée, le désir d’explorer les étoiles… Tout cela est à portée, mais prenons un moment pour nous pencher sur le côté sombre de ce monde idéal : et si tout ceci avait déjà eu lieu ? Où cela mènerait-il ?', 69.99, $manager);
        $this->creationProduit('Jeux PS5', '3307216262053', 'Anno 1800 Edition Console PS5', 'Bienvenue à l\'aube de l\'Ère industrielle dans ce jeu de gestion-construction en temps réel. Soyez au cœur d\'une des époques les plus riches en mutations de toute l\'histoire. Découvrez de nouvelles technologies, de nouveaux continents et de nouvelles sociétés. Bâtissez un nouveau monde à votre image !', 39.99, $manager);
        $this->creationProduit('Prochaines sorties Xbox Series','4020628673567','S.t.a.l.k.e.r. 2: Heart Of Chernobyl Collector\'s Edition XBOX SERIES X ','Découvrez la Zone d\'exclusion de Tchornobyl, un territoire en constante évolution abritant des mutants dangereux, des factions en guerre, des anomalies mortelles et des artefacts d\'une valeur inestimable. La récompense sera extrêmement élevée, mais le prix à payer risque d\'être bien plus grand qu\'escompté. Faites vos choix avec sagesse, car ils définiront votre propre histoire légendaire, mais également l\'avenir de l\'humanité.', 189.99,$manager);
        $this->creationProduit('Prochaines sorties Xbox Series','3701529503931','Sifu Vengeance Edition XBOX SERIES X ','Seul contre tous, il n’a aucun allié et d’innombrables adversaires à affronter. Pour vaincre et honorer la mémoire de sa famille, il ne dispose que de sa maîtrise exceptionnelle du kung-fu, ainsi que d’un mystérieux pendentif.', 49.99,$manager);
        $this->creationProduit('Prochaines sorties Xbox Series','3512899965867','Aliens Dark Descent XBOX SERIES X ','Prenez le commandement d’une escouade de Marines Coloniaux et mettez fin à une infestation Xénomorphe d’un nouveau genre dans Aliens: Dark Descent. Menez vos troupes dans des combats tactiques en temps-réel face aux terrifiants Xénomorphes, aux déserteurs de la Weyland-Yutani, et à de terrifiantes créatures inédites dans l’univers d’Alien.', 39.99,$manager);
        $this->creationProduit('Prochaines sorties Xbox Series','5016488140201','Afterimage Deluxe Edition XBOX SERIES X ','Afterimage est un jeu d\'action-aventure en 2D dessiné à la main qui propose des combats dynamiques, de nombreuses spécialisations de personnages, des niveaux non linéaires ainsi qu\'une intrigue saisissante qui prend place dans un monde fantasy.', 29.99,$manager);
        $this->creationProduit('Prochaines sorties Xbox Series','5026555367950','Wwe 2k23 XBOX SERIES X ','WWE 2K23 est Encore plus fort avec des fonctionnalités étendues, des graphismes exceptionnels et une liste impressionnante de Superstars et de Légendes de la WWE. 2K Showcase fait son retour avec un documentaire sportif interactif qui retrace les 20 ans de carrière de John Cena, et WarGames arrive enfin !', 74.99,$manager);
        $this->creationProduit('Jeux Xbox Series','5055277049202','Like A Dragon Ishin! XBOX SERIES X ','Dans les années 1860 à Kyoto, l\'inégalité règne en maître, mais un samouraï est prêt à infléchir le cours de l\'histoire dans sa quête de justice. Dans la peau de Ryoma Sakamoto, vous vous rendez à Kyoto pour trouver le meurtrier de votre père, vous innocenter d\'un meurtre que vous n\'avez pas commis et laver votre honneur. Ce faisant, vous mettrez un terme à l\'ère des samouraïs et changerez à jamais la face du Japon. Dégainez votre sabre, chargez votre arme à feu et rejoignez la révolution dans cette aventure historique survoltée avec la patte typique des créateurs de Yakuza: Like a Dragon.', 59.99,$manager);
        $this->creationProduit('Jeux Xbox Series','3665962005356','Blood Bowl 3 Brutal Edition Super Deluxe XBOX SERIES X ','Brutal, tactique, délirant, c’est BLOOD BOWL ! Respectant scrupuleusement les nouvelles règles du jeu de plateau, le jeu vidéo de football américain fantasy revient plus complet que jamais. Créez votre équipe et progressez pour emmener vos joueurs au sommet... et vos adversaires au cimetière.', 59.99,$manager);
        $this->creationProduit('Jeux Xbox Series','4020628617912','Mato Anomalies Day One Edition XBOX SERIES X ','Mato Anomalies est un RPG au tour par tour qui vous propose d\'explorer Mato, une version néo-futuriste du vieux Shanghai. Dans la peau des deux protagonistes, Doe et Gram, vous enquêterez sur d\'étranges anomalies et vous vous aventurerez dans des brèches pour lutter contre les abominations qui semblent vouloir détruire la ville.', 39.99,$manager);
        $this->creationProduit('Jeux Xbox Series','3665962019711','Transport Fever 2 XBOX SERIES X ','La famille des classiques du jeu de simulation de transport s\'agrandit avec Transport Fever 2. Découvrez un monde nouveau en parcourant des voies de transports terrestres, maritimes et aériennes. Que le progrès et la prospérité trouvent leur voie !', 49.99,$manager);
        $this->creationProduit('Jeux Xbox Series','4020628681937','Dead Island 2 Hell A XBOX SERIES X ','Un virus mortel se répand dans Los Angeles et transforme les habitants en zombies voraces. La ville est en quarantaine et l\'armée a battu en retraite. Vous avez été mordu et contaminé, mais vous vous découvrez immunisé (et plus encore) et devez apprendre à dompter le zombie qui sommeille en vous. Le sort de la ville et de l\'humanité se retrouvent entre vos mains, à vous et une poignée d\'autres salopards arrogants, dont le seul mérite est de se trouver être résistants à l\'agent infectieux.', 99.99,$manager);
        $manager->flush();
    }

    public function creationProduit(
        string $catégorie,
        string $refProduit,
        string $shortLibel,
        string $longLabel,
        int $prixHt,
        ObjectManager $manager
    ) {

        $produit = new Produit();
        $produit->setIdCategorie($manager->getRepository(Categorie::class)->findOneBy(array("nomination" => $catégorie)));
        $produit->setRefProduit($refProduit);
        $produit->setShortLibel($shortLibel);
        $produit->setSlug($this->slugger->slug($shortLibel)->lower());
        $produit->setLongLibel($longLabel);
        $produit->setPrixHt($prixHt);
        $manager->persist($produit);

        $this->addReference('prod-'.$this->counter, $produit);
        $this->counter++;
    }
}
