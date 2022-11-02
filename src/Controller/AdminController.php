<?php

namespace App\Controller;

use App\Entity\Painting;
use App\Form\PaintForm;
use App\Repository\PaintingRepository;
use Cocur\Slugify\Slugify;
use Doctrine\ORM\EntityManagerInterface;
use Elementor\Core\App\Modules\ImportExport\Directories\Post_Type;
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

    /**
     * @param EntityManagerInterface $manager
     * @param Painting $painting
     * @param Request $request
     * @return RedirectResponse|Response
     */
    #[Route('admin/edit/{id}', name: 'edit')]
    public function edit(EntityManagerInterface $manager, Painting $painting, Request $request)
    {
        $form = $this->createForm(PaintForm::class, $painting);
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


    /**
     * @param Painting $painting
     * @param EntityManagerInterface $manager
     * @return RedirectResponse
     */
    #[Route('/admin/delete/{id}', name: 'delete')]
    public function delete(Painting $painting, EntityManagerInterface $manager)
    {
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
}