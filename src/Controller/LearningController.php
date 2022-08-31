<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/learning', name: 'app_learning')]
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }


    #[Route ('/about-me')]
    public function AboutMe(): Response
    {
       return $this->render('example.html.twig', ['name' => 'BeCode']);
    }





}
