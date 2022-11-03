<?php

namespace App\Controller;

use App\Entity\Painting;
use App\Entity\Comments;
use App\Form\CommentType;
use App\Form\PaintType;
use App\Repository\CommentsRepository;
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
    #[Route('paint/{slug}', name: 'paint')]
    public function paint(Painting $painting, CommentsRepository $commentsRepository, Request $request,
                          EntityManagerInterface $manager):
    Response
    {
        $comment = new Comments();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        $id = $painting->getId();
        $slug = $painting->getSlug();
        $comments = $commentsRepository->findBy(['paint' => $id, 'visible' => '1']);
        if($form->isSubmitted() && $form->isValid()){
            $comment->setDate(new \DateTimeImmutable());
            $comment->setPaint($painting);
            $comment->setVisible(TRUE);
            $manager->persist($comment);
            $manager->flush();
            return $this->redirect($request->getUri());
        }
        return $this->renderForm('pages/paint.html.twig', [
            'painting' => $painting,
            'form' => $form,
            'comments' => $comments
        ]);
    }
}