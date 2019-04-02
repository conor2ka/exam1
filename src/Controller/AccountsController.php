<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AccountsController extends AbstractController
{
    /**
     * @Route("/timetable", name="accounts")
     * @IsGranted("ROLE_STUDENT")
     */
    public function index()
    {
        return $this->render('accounts/index.html.twig', [
            'controller_name' => 'AccountsController',
        ]);
    }
}
