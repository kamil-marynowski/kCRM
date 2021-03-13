<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * Redirects to login path
     *
     * @Route("/", name="front_control")
     */
    public function frontControl(): RedirectResponse
    {

        return $this->redirectToRoute('login');
    }


    /**
     * @Route("/home", methods={"GET"}, name="homepage")
     */
    public function homepage()
    {

        return $this->render('front/homepage.html.twig', []);
    }
}
