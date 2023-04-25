<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Habite;
use App\Entity\Adresse;
use App\Form\RegistrationFormType;
use App\Repository\ClientRepository;
use App\Repository\HabiteRepository;
use App\Security\ClientAuthenticator;
use App\Repository\CommercialRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CoefficientRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        UserAuthenticatorInterface $userAuthenticator,
        ClientAuthenticator $authenticator,
        EntityManagerInterface $entityManager,
        CoefficientRepository $repoCoef,
        CommercialRepository $repoCommercial,
        ClientRepository $repoClient,
    ): Response {
        $user = new Client();
        $adresse = new Adresse();
        $form = $this->createForm(RegistrationFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();
            $user->setIdCoeff($repoCoef->find(1));
            $user->setIdCommercial($repoCommercial->find(1));
            $user->setEmail($data["email"]);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setNom($data["nom"]);
            $user->setPrenom($data["prenom"]);
            $user->setTelephone($data["telephone"]);
            $entityManager->persist($user);
            $entityManager->flush();

            $getId = $repoClient->findAll($data["email"]);
            $getId = $getId[0];


            $adresse->setIdClient($user);
            $adresse->setNominationAdresse($data["nomination_adresse"]);
            $adresse->setAdresse($data["adresse"]);
            $adresse->setVille($data["ville"]);
            $adresse->setCp($data["cp"]);
            $adresse->setActif(true);
            $entityManager->persist($adresse);
            
            $entityManager->flush();

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
