<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Client;
use App\Entity\Adresse;
use App\Entity\Commercial;
use App\Entity\Coefficient;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ClientFixtures extends Fixture implements DependentFixtureInterface
{

    public function getDependencies(): array 
    {
        return [
            CommercialFixtures::class,
            CoefficientFixtures::class,
        ];
    }

    public function __construct(private UserPasswordHasherInterface $passwordEncoder){}


    public function load(ObjectManager $manager): void
    {


        $admin = new Client;
        $adminAdresse = new Adresse();

        $admin->setIdCoeff($manager->getRepository(Coefficient::class)->findOneBy([]));
        $admin->setIdCommercial($manager->getRepository(Commercial::class)->findOneBy([]));
        $admin->setEmail('admin@admin.fr');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordEncoder->hashPassword($admin, 'admin'));
        $admin->setNom('Pac');
        $admin->setPrenom('Pierre');
        $admin->setTelephone('0232455536');

        $adminAdresse->setNominationAdresse('l\'adresse du BOSS');
        $adminAdresse->setAdresse('rue de la Gloire');
        $adminAdresse->setVille('Fortune');
        $adminAdresse->setCp('12345');
        $adminAdresse->setActif(1);
        $adminAdresse->setIdClient($admin);

        $manager->persist($admin);
        //$manager->persist($adminAdresse);

        $faker = Faker\Factory::create('fr_FR');
        for ($client = 1; $client <= 5; $client++) {
            $newClient = new Client;
            $newAdresse = new Adresse;

            $newClient->setIdCoeff($manager->getRepository(Coefficient::class)->findOneBy([]));
            $newClient->setIdCommercial($manager->getRepository(Commercial::class)->findOneBy([]));
            $newClient->setEmail($faker->email);
            $newClient->setPassword($this->passwordEncoder->hashPassword($newClient, 'secret'));
            $newClient->setNom($faker->lastName);
            $newClient->setPrenom($faker->firstName);
            $newClient->setTelephone($faker->phoneNumber);

            $newAdresse->setNominationAdresse($faker->name);
            $newAdresse->setAdresse($faker->streetAddress);
            $newAdresse->setVille($faker->city);
            $newAdresse->setCp(str_replace(' ', '', $faker->postcode));
            $newAdresse->setActif($faker->randomElement([0, 1]));

            $newAdresse->setIdClient($newClient);
        
            $manager->persist($newClient);
            $manager->persist($newAdresse);
        }



        $this->creationClientParticulier('client1@demo.fr', 'client1', 'client1', 'client1', '0232455536', 'client1', 'client1', 'client1', '12345', 1, $manager);

        $manager->flush();
    }

    public function creationClientParticulier(
        string $email,
        string $nom,
        string $prenom,
        string $password,
        string $telephone,
        string $nominationAdresse,
        string $adresse,
        string $ville,
        string $cp,
        bool $actif,
        ObjectManager $manager
    ) {

        $newClient = new Client;
        $newAdresse = new Adresse;

        $newClient->setIdCoeff($manager->getRepository(Coefficient::class)->findOneBy([]));
        $newClient->setIdCommercial($manager->getRepository(Commercial::class)->findOneBy([]));
        $newClient->setEmail($email);
        $newClient->setPassword($this->passwordEncoder->hashPassword($newClient, $password));
        $newClient->setNom($nom);
        $newClient->setPrenom($prenom);
        $newClient->setTelephone($telephone);

        $newAdresse->setNominationAdresse($nominationAdresse);
        $newAdresse->setAdresse($adresse);
        $newAdresse->setVille($ville);
        $newAdresse->setCp($cp);
        $newAdresse->setActif($actif);

        $newAdresse->setIdClient($newClient);

        $manager->persist($newClient);
        $manager->persist($newAdresse);
    }
}
