<?php

namespace App\Controller;

use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    #[Route('/team', name: 'team')]
    public function team(TeamRepository $teamRepository): Response
    {
        $members = $teamRepository->findBy([], ['role' => 'ASC']);
        return $this->render('pages/team.html.twig',
        [
            'members' => $members
        ]
        );
    }
}