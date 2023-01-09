<?php

namespace App\Controller;

use App\Entity\QuizContent;
use App\Form\QuizContentType;
use App\Repository\QuizContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/quizContent')]
class QuizContentController extends AbstractController
{
    #[Route('/', name: 'quizContent_index', methods: 'GET')]
    public function index(QuizContentRepository $quizContentRepository): Response
    {
        if (!in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('main_page_index');
        }

        return $this->render('quizContent/index.html.twig', [
            'quizContents' => $quizContentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'quizContent_new', methods: ['GET', 'POST'])]
    public function new(Request $request, QuizContentRepository $quizContentRepository): Response
    {
        $quizContent = new QuizContent();
        $form = $this->createForm(QuizContentType::class, $quizContent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $quizContentRepository->add($quizContent, true);

            return $this->redirectToRoute('quizContent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('quizContent/new.html.twig', [
            'quizContent' => $quizContent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'quizContent_show', methods: 'GET')]
    public function show(QuizContent $quizContent): Response
    {
        return $this->render('quizContent/show.html.twig', [
            'quizContent' => $quizContent,
        ]);
    }

    #[Route('/{id}/edit', name: 'quizContent_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, QuizContent $quizContent, QuizContentRepository $quizContentRepository): Response
    {
        $form = $this->createForm(QuizContentType::class, $quizContent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $quizContentRepository->add($quizContent, true);

            return $this->redirectToRoute('quizContent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('quizContent/edit.html.twig', [
            'quizContent' => $quizContent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'quizContent_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, QuizContent $quizContent, QuizContentRepository $quizContentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quizContent->getId(), $request->request->get('_token'))) {
            $quizContentRepository->remove($quizContent, true);
        }

        return $this->redirectToRoute('quizContent_index', [], Response::HTTP_SEE_OTHER);
    }
}
