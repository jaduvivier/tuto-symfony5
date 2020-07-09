<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug) 
    {
        $answers = [
            "Maybe… try with your fingers?",
            "Honestly, I never tie my shoes and it's never been a problem!",
            "Make sure you do have shoes.",
        ];

        return $this->render('question/show.html.twig', [
            "question" => ucwords(str_replace('-', ' ', $slug)),
            "answers" => $answers
        ]);
    }
}