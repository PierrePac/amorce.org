<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use App\Repository\PhotoRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CatalogueController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function acceuil(CategorieRepository $categorieRepository, ProduitRepository $produitRepository, PhotoRepository $photoRepository): Response
    {
        return $this->render('catalogue/accueil.html.twig', [
            // 'categories' => $categorieRepository->findBy([], ['id' => 'ASC']),
            'produits' => $produitRepository->findBy([], ['id' => 'ASC']),
            'photos' => $photoRepository->findBy([], ['id' => 'ASC']),
        ]);
    }


    #[Route('/cat/{slug}', name: 'categorie')]
    public function categorie(CategorieRepository $categorieRepository, Categorie $categorie, ProduitRepository $produitRepository, PhotoRepository $photoRepository): Response
    {
        return $this->render('catalogue/categorie.html.twig',[
            'categorie' => $categorie,
            'categories' => $categorieRepository->findBy([], ['id' => 'ASC']),
            'produits' => $produitRepository->findBy([], ['id' => 'ASC']),
            'photos' => $photoRepository->findBy([], ['id' => 'ASC']),
        ]);
    }


    #[Route('/produit/{slug}', name: 'produit')]
    public function produit(Produit $produit, CategorieRepository $categorieRepository, PhotoRepository $photoRepository, ProduitRepository $produitRepository): Response
    {
        return $this->render('catalogue/produit.html.twig', [
            'produit' => $produit,
            'produits' => $produitRepository->findBy([], ['id' => 'ASC']),
            // 'categories' => $categorieRepository->findBy([], ['id' => 'ASC']),
            'photos' => $photoRepository->findBy([], ['id' => 'ASC']),
        ]);
    }
}
