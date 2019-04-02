<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="Home page")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', []);
    }
    /**
     * @Route("/tuesday", name="Tuesday week 11")
     */
    public function about()
    {
        return $this->render('default/about.html.twig', []);
    }



}
