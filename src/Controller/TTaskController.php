<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TTaskController extends AbstractController
{
    #[Route('/t/task', name: 'app_t_task')]
    public function index(): Response
    {
        return $this->render('t_task/index.html.twig', [
            'controller_name' => 'TTaskController',
        ]);
    }
}
