<?php

namespace App\Controller;

use App\Entity\QuizHistory;
use App\Repository\QuizContentRepository;
use App\Repository\QuizHistoryRepository;
use App\Repository\QuizResultRepository;
use DateTime;
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

            foreach ($req as $item) // kazdy item to odpowiedz na dane stwierdzenie. Index 0 to typ osobowości pytania, a index 1 to wartośc jaka zostałą zaznaczona
            {
                $valueOfEachPersonality[$item[0]] += intval($item[1]);
            }

            asort($valueOfEachPersonality);
            $valueOfEachPersonality = array_slice(array_reverse($valueOfEachPersonality, true),0, 3, true); // Zwraca 3 osobowości z najwiekszą ilością 'punktów'


            return $this->redirectToRoute('quiz_result', ['amount' => $valueOfEachPersonality], Response::HTTP_SEE_OTHER);
        }

        $quizContentValues = $quizContentRepository->findAll();
        shuffle($quizContentValues); //wyswietlenie stwierdzen quizu w losowej kolejnosci

        return $this->renderForm('quiz/index.html.twig', [
            'quizContents' => $quizContentValues,
        ]);
    }

    #[Route('/end', name: 'quiz_result', methods: ['GET'])]
    public function quizResult(Request $request, QuizResultRepository $quizResultRepository, QuizHistoryRepository $quizHistoryRepository): Response
    {

        $amount = $request->query->get('amount');

        if(!is_null($this->getUser())) //Zapisywanie quizów do historii jesli jestes zalogowany
        {
            $quizHistory = new QuizHistory();

            $quizHistory
                ->setFirstPersonality(array_keys((array) $amount)[0])
                ->setFirstPersonalityValue(array_values((array) $amount)[0])
                ->setSecondPersonality(array_keys((array) $amount)[1])
                ->setSecondPersonalityValue(array_values((array) $amount)[1])
                ->setThirdPersonality(array_keys((array) $amount)[2])
                ->setThirdPersonalityValue(array_values((array) $amount)[2])
                ->setDateTime(new DateTime())
                ->setUser($this->getUser());

            $quizHistoryRepository->save($quizHistory, true);
        }

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
            if($amountOfAllchecked !== 0) // zeby nie dzielic przez 0
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


    #[Route('/history/{id}', name: 'quiz_history', methods: ['GET'])]
    public function quizHistory(QuizHistory $quizHistory, QuizResultRepository $quizResultRepository): Response
    {
        $amount = $quizHistory->getFirstPersonalityValue() + $quizHistory->getSecondPersonalityValue() + $quizHistory->getThirdPersonalityValue();

        $percenteges = [];
        $personality = [];

        $percenteges[] = number_format(($quizHistory->getFirstPersonalityValue() / $amount) * 100, 2);
        $percenteges[] = number_format(($quizHistory->getSecondPersonalityValue() / $amount) * 100, 2);
        $percenteges[] = number_format(($quizHistory->getThirdPersonalityValue() / $amount) * 100, 2);

        $personality[] = $quizResultRepository->findOneBy(['sign' => $quizHistory->getFirstPersonality()]);
        $personality[] = $quizResultRepository->findOneBy(['sign' => $quizHistory->getSecondPersonality()]);
        $personality[] = $quizResultRepository->findOneBy(['sign' => $quizHistory->getThirdPersonality()]);

        return $this->renderForm('quiz/endQuiz.html.twig', [
            'personality' => $personality,
            'percentages' => $percenteges,
        ]);
    }

}
