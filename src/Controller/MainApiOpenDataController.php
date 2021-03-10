<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainApiOpenDataController extends AbstractController
{
    /**
     * @Route("/main/api/open/data", name="main_api_open_data")
     */
    public function index(): Response
    {
        return $this->render('main_api_open_data/index.html.twig', [
            'controller_name' => 'MainApiOpenDataController',
        ]);
    }
}
