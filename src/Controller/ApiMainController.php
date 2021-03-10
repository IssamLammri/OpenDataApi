<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiMainController extends AbstractController
{
    /**
     * @Route("/", name="api_main")
     */
    public function index(): Response
    {
        return $this->render('api_main/index.html.twig', [
            'controller_name' => 'ApiMainController',
        ]);
    }
}
