<?php

namespace App\Controller;

use App\Repository\PaintingRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    #[Route('/gallery', name: 'gallery')]
    public function gallery(PaintingRepository $paintingRepository, CategoryRepository $categoryRepository): Response
    {
        $paintings = $paintingRepository->findAll();
        $categories = $categoryRepository->findAll();
        return $this->render('pages/gallery.html.twig',
            [
                'paintings' => $paintings,
                'categories' => $categories
            ]
        );
    }
}