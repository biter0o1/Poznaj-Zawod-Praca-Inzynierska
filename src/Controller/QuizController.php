<?php

namespace App\Controller;

use App\Entity\QuizContent;
use App\Form\QuizContentType;
use App\Repository\QuizContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/quiz')]
class QuizController extends AbstractController
{
    #[Route('/', name: 'quiz_index', methods: 'GET')]
    public function index(QuizContentRepository $quizContentRepository): Response
    {
        return $this->render('quiz/index.html.twig', [
            'quizContents' => $quizContentRepository->findAll(),
        ]);
    }

}
