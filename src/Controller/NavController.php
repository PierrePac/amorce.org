<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NavController extends AbstractController
{
    public function nav(CategorieRepository $categorieRepository): Response
    {
        return $this->render('_partials/_nav.html.twig', [
            'categories' => $categorieRepository->findBy([], ['id' => 'ASC']),
        ]);
    }

    public function navAdmin(CategorieRepository $categorieRepository): Response
    {
        return $this->render('_partials/_nav_admin.html.twig', [
            'categories' => $categorieRepository->findBy([], ['id' => 'ASC']),
        ]);
    }

    public function bandeau(CategorieRepository $categorieRepository): Response
    {
        return $this->render('_partials/_bandeauCategories.html.twig', [
            'categories' => $categorieRepository->findBy([], ['id' => 'ASC']),
        ]);
    }
}
