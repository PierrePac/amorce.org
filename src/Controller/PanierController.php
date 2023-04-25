<?php

namespace App\Controller;

use DateTimeImmutable;
use App\Entity\Adresse;
use App\Entity\Facture;
use App\Entity\Produit;
use App\Entity\Commande;
use App\Entity\Livraison;
use App\Entity\Historique;
use App\Form\CommandeFormType;
use App\Form\AjoutAdresseFormType;
use App\Repository\AdresseRepository;
use App\Repository\ProduitRepository;
use DateInterval;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/panier', name: 'panier_')]
class PanierController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SessionInterface $session, ProduitRepository $produitRepository): Response
    {
        $panier = $session->get('panier', []);

        //on "fabrique" les données
        $dataPanier = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $produit = $produitRepository->find($id);
            $dataPanier[] = [
                'produit' => $produit,
                'quantite' => $quantite
            ];
            $total += $produit->getPrixHt() * $quantite;
        }

        return $this->render('panier/index.html.twig', compact('dataPanier', 'total'));
    }

    #[Route('/add/{id}', name: 'add')]
    public function add(Produit $produit, SessionInterface $session)
    {
        //on récupère le panier actuel
        $panier = $session->get('panier', []);
        $id = $produit->getId();

        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');
    }

    #[Route('/remove/{id}', name: 'remove')]
    public function remove(Produit $produit, SessionInterface $session)
    {
        //on récupère le panier actuel
        $panier = $session->get('panier', []);
        $id = $produit->getId();

        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(Produit $produit, SessionInterface $session)
    {
        //on récupère le panier actuel
        $panier = $session->get('panier', []);
        $id = $produit->getId();

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');
    }

    #[Route('/delete', name: 'delete_all')]
    public function deleteAll(SessionInterface $session)
    {
        $session->remove('panier');

        return $this->redirectToRoute('panier_index');
    }

    #[Route('/validation', name: 'validation')]
    public function validation(SessionInterface $session, ProduitRepository $produitRepository, AdresseRepository $adresses, Request $request, EntityManagerInterface $entityManager,): Response
    {
        $panier = $session->get('panier', []);

        //on "fabrique" les données
        $dataPanier = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $produit = $produitRepository->find($id);
            $dataPanier[] = [
                'produit' => $produit,
                'quantite' => $quantite
            ];
            $total += $produit->getPrixHt() * $quantite;
        }
        $user = $this->getUser();
        $userAdresse = $adresses->find(1);
        $session->set('userAdresse', $userAdresse);

        $commandeForm = $this->createForm(CommandeFormType::class, $user);
        $commandeForm->handleRequest($request);

        $ajoutAdresseForm = $this->createForm(AjoutAdresseFormType::class);
        $ajoutAdresseForm->handleRequest($request);

        // Rajout d'une adresse

        $adresse = new Adresse();

        if ($ajoutAdresseForm->isSubmitted()) {
            $data = $ajoutAdresseForm->getData();
            
            $adresse->setIdClient($user);
            $adresse->setNominationAdresse($data->getNominationAdresse());
            $adresse->setAdresse($data->getAdresse());
            $adresse->setVille($data->getVille());
            $adresse->setCp($data->getCp());
            $adresse->setActif(true);
            $entityManager->persist($adresse);
            $entityManager->flush();
        }
        

        //création d'une nouvelle commande
        $commande = new Commande();
        $facture = new Facture();
        $historique = new Historique();
        $livraison = new Livraison();
        $date = new DateTimeImmutable();
        $datepro = $date->add(new DateInterval('P30D'));

        if($commandeForm->isSubmitted()) {
           
            $adresseLivraison = $commandeForm->get('nomination_adresse')->getData();
            $adresseFacturation = $commandeForm->get('nomination_adresse2')->getData();
            $moyenPaiement = $commandeForm->get('moyen_paiement')->getData();

            $commande->setIdClient($user);
            $commande->setTotalTtc($total);
            $commande->setStatut('en cours');
            $commande->setDateCom($date);
            $entityManager->persist($commande);

            $facture->setIdCom($commande);
            $facture->setIdAdresse($adresseFacturation);
            if($user->getRaisonSocial() == null){
                $facture->setDelaiPaiement(0);
                $facture->setModePaiement('cb');
                $facture->setDatePaiement($date);
            } else{
                $facture->setDelaiPaiement(90);
                $facture->setModePaiement($moyenPaiement);
                $facture->setDatePaiement($datepro);
            }
            $entityManager->persist($facture);

            $livraison->setIdCom($commande);
            $livraison->setDateLivraison($datepro);
            $livraison->setIdAdresse($adresseLivraison);
            $entityManager->persist($livraison);

            $historique->setIdClient($user);
            $historique->setIdCom($commande);
            $historique->setNomHistorique($user->getNom());
            $historique->setPrenomHistorique($user->getPrenom());
            $historique->setMailHistorique($user->getEmail());
            $historique->setTelephoneHistorique($user->getTelephone());
            if($user->getRaisonSocial() == null){
                $historique->setRaisonSocialHistorique(null);
            } else{
                $historique->setRaisonSocialHistorique($user->getRaisonSocial());
            }
            $entityManager->persist($historique);
            $entityManager->flush();
        }

        return $this->render(
            'panier/validation.html.twig',
            [
                'dataPanier' => $dataPanier,
                'total' => $total,
                'user' => $user,
                'produits' => $produitRepository,
                'adresse' => $userAdresse,
                'commandeForm' => $commandeForm->createView(),
                'ajoutAdresseForm' => $ajoutAdresseForm->createView(),
            ]
        );
    }
}
