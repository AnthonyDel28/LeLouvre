<?php

namespace App\Controller;

use App\Entity\Painting;
use App\Entity\Comments;
use App\Form\CommentForm;
use App\Form\PaintForm;
use App\Repository\PaintingRepository;
use App\Repository\CategoryRepository;
use App\Repository\TechnicRepository;
use Doctrine\ORM\EntityManagerInterface;
use Egulias\EmailValidator\Warning\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaintController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('paint/{slug}', name: 'paint')]
    public function paint(Painting $painting, Request $request, EntityManagerInterface $manager): Response
    {
        return $this->render('pages/paint.html.twig', [
            'painting' => $painting,
        ]);
    }

}