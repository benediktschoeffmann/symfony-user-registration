<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DummyController extends AbstractController
{
    /**
     * @Route("/app/unprotected", name="app_unprotected")
     */
    public function index(): Response
    {
        return $this->render('dummy/unprotected.html.twig', [
            'controller_name' => 'DummyController',
        ]);
    }
}
