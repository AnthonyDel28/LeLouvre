<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Entity\Painting;
use App\Form\PaintType;
use App\Repository\CommentsRepository;
use App\Repository\PaintingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Faker;

class AdminController extends AbstractController
{
    /**
     * @param PaintingRepository $repository
     * @return Response
     */
    #[Route('/admin', name: 'admin')]
    public function paints(PaintingRepository $repository) :Response
    {
        $paints = $repository->findAll();
        return $this->render('admin/admin.html.twig',
        [
            'paints' => $paints
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return RedirectResponse|Response
     */
    #[Route('/admin/add', name: 'add')]
    public function add(Request $request, EntityManagerInterface $manager)
    {
        $paint = new Painting();
        $faker = Faker\Factory::create();
        $form = $this->createForm(PaintType::class, $paint);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
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

    /**
     * @param EntityManagerInterface $manager
     * @param Painting $painting
     * @param Request $request
     * @return RedirectResponse|Response
     */
    #[Route('admin/edit/{id}', name: 'edit')]
    public function edit(EntityManagerInterface $manager, Painting $painting, Request $request)
    {
        $form = $this->createForm(PaintType::class, $painting);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $painting->createSlug();
            $manager->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->renderForm('admin/edit.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('admin/comments/{id}', name: 'comments')]
    public function comments(EntityManagerInterface $manager, Painting $painting, Request $request,
                             CommentsRepository $commentsRepository)
    {
        $comments = $commentsRepository->findBy(['paint' => $painting], ['paint' => 'ASC']);
        return $this->render('admin/comments.html.twig', [
            'comments' => $comments
        ]);
    }

    #[Route('/admin/delete/{id}', name: 'delete')]
    public function delete(Painting $painting, CommentsRepository $commentsRepository, EntityManagerInterface $manager)
    {
        $comments = $commentsRepository->findBy(['paint' => $painting]);
        foreach($comments as $comment){
            $manager->remove($comment);
        }
        $manager->remove($painting);
        $manager->flush();
        return $this->redirectToRoute('admin');
    }

    /**
     * @param EntityManagerInterface $manager
     * @param Painting $painting
     * @return RedirectResponse
     */
    #[Route('/admin/visible/{id}', name: 'visible')]
    public function visible(EntityManagerInterface $manager, Painting $painting)
    {
        $painting->setVisible(!$painting->isVisible());
        $manager->flush();
        return $this->redirectToRoute('admin');
    }

    /**
     * @param EntityManagerInterface $manager
     * @param Painting $painting
     * @return RedirectResponse
     */
    #[Route('/admin/hide/{id}', name: 'hide')]
    public function hide(EntityManagerInterface $manager, Comments $comments, Request $request)
    {
        $route = $request->headers->get('referer');
        $comments->setVisible(!$comments->isVisible());
        $manager->flush();
        return $this->redirect($route);
    }

    #[Route('/admin/deletecom/{id}', name: 'deletecom')]
    public function deletecom(Comments $comments, EntityManagerInterface $manager, Request $request)
    {
        $route = $request->headers->get('referer');
        $manager->remove($comments);
        $manager->flush();
        return $this->redirect($route);
    }
}