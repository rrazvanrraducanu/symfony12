<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }
    /**
     * @Route("/welcome", name="welcome")
     */
    public function welcome()
    {
        return $this->render('welcome/index.html.twig');
    }
}
