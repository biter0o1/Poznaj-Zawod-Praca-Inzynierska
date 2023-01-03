<?php

namespace App\Controller;

use App\Entity\QuizContent;
use App\Form\QuizContentType;
use App\Form\QuizType;
use App\Repository\QuizContentRepository;
use App\Repository\QuizResultRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    $REALISTYCZNY_PRAKTYCZNY = ['type' => 'Realistyczny-Praktyczny', 'sign' => 'R'];
    $BADAWCZY = ['type' => 'Badawczy', 'sign' => 'B'];
    $ARTYSTYCZNY = ['type' => 'Artystyczny', 'sign' => 'A'];
    $SPOLECZNY_SOCJALNY = ['type' => 'Spoleczny-Socjalny', 'sign' => 'S'];
    $PRZEDSIEBIORCZY = ['type' => 'Przedsiebiorczy', 'sign' => 'P'];
    $KONWENCJONALNY = ['type' => 'Konwencjonalny', 'sign' => 'K'];
#[Route('/quiz')]
class QuizController extends AbstractController
{



    #[Route('/', name: 'quiz_index', methods: ['GET', 'POST'])]
    public function index(Request $request, QuizContentRepository $quizContentRepository): Response
    {

        if ($request->isMethod('POST')) {
            //TODO Zapisać quiz do bazy danych, (potem bd mozna odtworzyć historie)
            $req = $request->request->all();



            $valueOfEachPersonality = [];
            $valueOfEachPersonality['R'] = 0;
            $valueOfEachPersonality['B'] = 0;
            $valueOfEachPersonality['A'] = 0;
            $valueOfEachPersonality['S'] = 0;
            $valueOfEachPersonality['P'] = 0;
            $valueOfEachPersonality['K'] = 0;

            foreach ($req as $item) // $i == personalitySign np 'R'
            {

                $valueOfEachPersonality[$item[0]] += intval($item[1]);
            }

            asort($valueOfEachPersonality);
            $valueOfEachPersonality = array_slice(array_reverse($valueOfEachPersonality, true),0, 3, true); // Zwraca 3 osobowości z najwiekszą ilością 'punktów'

            return $this->redirectToRoute('endQuiz_index', ['amount' => $valueOfEachPersonality], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('quiz/index.html.twig', [
            'quizContents' => $quizContentRepository->findAll(),
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
