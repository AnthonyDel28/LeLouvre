<?php

namespace App\Controller;

use App\Entity\Painting;
use App\Entity\Comments;
use App\Form\CommentForm;
use App\Form\PaintForm;
use App\Repository\PaintingRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Egulias\EmailValidator\Warning\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
    public function paint(Painting $painting, Request $request, EntityManagerInterface $manager):
    Response
    {
        return $this->renderForm('pages/paint.html.twig', [
            'painting' => $painting,
        ]);
    }

    public function add(Request $request, EntityManagerInterface $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        $paint = new Painting();
        $form = $this->createForm(PaintForm::class, $paint);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $paint->setImage('default.jpg');
            $paint->createSlug();
            $paint->setRarityScore($faker->numberBetween(1, 99));
            $manager->persist($paint);
            $manager->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->renderForm('admin/add.html.twig', [
            'form' => $form,
        ]);

    }
}