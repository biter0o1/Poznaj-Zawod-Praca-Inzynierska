<?php

namespace App\Controller;

use App\Repository\QuizContentRepository;
use App\Repository\QuizResultRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/quiz')]
class QuizController extends AbstractController
{

    #[Route('/', name: 'quiz_index', methods: ['GET', 'POST'])]
    public function index(Request $request, QuizContentRepository $quizContentRepository): Response
    {

        if ($request->isMethod('POST')) {
            $req = $request->request->all();

            $valueOfEachPersonality = [];
            $valueOfEachPersonality['R'] = 0;
            $valueOfEachPersonality['B'] = 0;
            $valueOfEachPersonality['A'] = 0;
            $valueOfEachPersonality['S'] = 0;
            $valueOfEachPersonality['P'] = 0;
            $valueOfEachPersonality['K'] = 0;

            foreach ($req as $item)
            {
                $valueOfEachPersonality[$item[0]] += intval($item[1]);
            }

            asort($valueOfEachPersonality);
            $valueOfEachPersonality = array_slice(array_reverse($valueOfEachPersonality, true),0, 3, true); // Zwraca 3 osobowości z najwiekszą ilością 'punktów'

            return $this->redirectToRoute('endQuiz_index', ['amount' => $valueOfEachPersonality], Response::HTTP_SEE_OTHER);
        }

        $quizContentValues = $quizContentRepository->findAll();
        shuffle($quizContentValues); //wyswietlenie stwierdzen quizu w losowej kolejnosci

        return $this->renderForm('quiz/index.html.twig', [
            'quizContents' => $quizContentValues,
        ]);
    }

    #[Route('/end', name: 'endQuiz_index', methods: ['GET', 'POST'])]
    public function end(Request $request, QuizResultRepository $quizResultRepository): Response
    {

        $amount = $request->query->get('amount');

        $amountOfAllchecked = 0;

        foreach ($amount as $i)
        {
            $amountOfAllchecked += $i;
        }

        $percenteges = [];
        $personality = [];
        $index = 0;

        foreach ($amount as $k => $i)
        {
            if($amountOfAllchecked !== 0) // zeby nie dzilic przez 0
            {
                $percenteges[$index] = number_format(($i / $amountOfAllchecked) * 100, 2); // Liczenie ile to procent
            }
            else
            {
                $percenteges[$index] = 0;
            }

            $personality[$index++] = $quizResultRepository->findOneBy(['sign' => $k]);
        }

        return $this->renderForm('quiz/endQuiz.html.twig', [
            'personality' => $personality,
            'percentages' => $percenteges,
        ]);
    }

}
