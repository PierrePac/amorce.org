<?php

namespace App\Controller\Admin;

use App\Entity\Photo;
use App\Entity\Produit;
use App\Form\ProduitsFormType;
use App\Repository\PhotoRepository;
use App\Repository\ProduitRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;


#[Route('/admin/produits', name: 'admin_produits_')]
class ProduitsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('admin/produits/index.html.twig', [
            'produits' => $produitRepository->findBy([], ['id' => 'ASC']),
        ]);
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        //on crée un nouveau produit
        $produit = new Produit();
        //on crée un formulaire
        $produitForm = $this->createForm(ProduitsFormType::class, $produit);
        //on traite la requête du formulaire
        $produitForm->handleRequest($request);
        //on vérifie si le formulaire est soumis et valide
        if ($produitForm->isSubmitted() && $produitForm->isValid()) {
            //on récupère les images
            $images = $produitForm->get('images')->getData();
            $counter=0;
            foreach ($images as $image) {
                //on définit le dossier de destiation
                $folder = 'produits';
                //on appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 300, 300);
                
                $img = new Photo();
                $img->setSrc('assets/media/'. $folder. '/'. $image);
                if($counter == 0){
                    $img->setMajorPicture(1);
                } else {
                    $img->setMajorPicture(0);
                }

                $produit->addPhoto($img);
                
                $counter++;
            }

            //on génère le slug
            $slug = $slugger->slug($produit->getShortLibel())->lower();
            $produit->setSlug($slug);
            //on stock
            $em->persist($produit);
            $em->flush();
            $this->addFlash('success', 'Le produit a été ajouté.');
            //on redirige
            return $this->redirectToRoute('admin_produits_index');
        }


        return $this->render('admin/produits/ajout.html.twig', [
            'produitForm' => $produitForm->createView(),
        ]);
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(Produit $produit, Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        //on crée un formulaire
        $produitForm = $this->createForm(ProduitsFormType::class, $produit);
        //on traite la requête du formulaire
        $produitForm->handleRequest($request);
        //on vérifie si le formulaire est soumis et valide
        if ($produitForm->isSubmitted() && $produitForm->isValid()) {
            //on génère le slug
            $slug = $slugger->slug($produit->getShortLibel())->lower();
            $produit->setSlug($slug);
            //on stock
            $em->persist($produit);
            $em->flush();

            $this->addFlash('success', 'Le produit a été modifié.');
            //on redirige
            return $this->redirectToRoute('admin_produits_index');
        }


        return $this->render('admin/produits/edition.html.twig', [
            'produitForm' => $produitForm->createView(),
        ]);
    }

    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Produit $produit, PhotoRepository $photoRepository, EntityManagerInterface $em, Request $request): Response
    {
        //on crée un formulaire
        $produitForm = $this->createForm(ProduitsFormType::class, $produit);
        //on traite la requête du formulaire
        $produitForm->handleRequest($request);
        //on vérifie si le formulaire est soumis et valide
        if ($produitForm->isSubmitted() && $produitForm->isValid()) {

            $em->remove($produit);
            $em->flush();

            $this->addFlash('message', 'Annonce supprimée avec succès');

            return $this->redirectToRoute('admin_produits_index');
        }

        return $this->render('admin/produits/suppression.html.twig', [
            'produitForm' => $produitForm->createView(),
            'produit' => $produit,
            'photos' => $photoRepository->findBy([], ['id' => 'ASC']),
        ]);
    }
}
