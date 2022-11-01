<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\Painting;
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

    /**
     * @return Response
     */
    #[Route('paint/{slug}', name: 'paint')]
    public function paint(Painting $painting): Response
    {
        return $this->render('pages/paint.html.twig', [
            'painting' => $painting
        ]);
    }
}