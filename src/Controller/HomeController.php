<?php

namespace App\Controller;

use App\Repository\PaintingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/', name: 'home')]
    public function index(PaintingRepository $paintingRepository): Response
    {
        $paints = $paintingRepository->findBy(['visible' => TRUE], ['rarityScore' => 'DESC'], 3);
        return $this->render('home/home.html.twig',
        [
            'paints' => $paints
        ]
        );
    }
}