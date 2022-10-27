<?php

namespace App\Controller;

use App\Repository\PaintingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    #[Route('/gallery', name: 'gallery')]
    public function gallery(PaintingRepository $paintingRepository): Response
    {
        $paintings = $paintingRepository->findAll();
        return $this->render('pages/gallery.html.twig',
            [
                'paintings' => $paintings,
            ]
        );
    }
}