<?php

namespace App\Controller;

use App\Service\PictureService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api/post_image', name: 'app_api')]
    public function index(Request $request, PictureService $pictureService): Response
    {
        $file = $request->files->get("file");

        $file = $pictureService->add($file);

        return $this->json([
            'nom' => $file,
        ]);
    }
}

