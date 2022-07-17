<?php

namespace App\Controller;

use App\Entity\Example;
use App\Form\ExampleType;
use App\Repository\ExampleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/example')]
class ExampleController extends AbstractController
{
    #[Route('/', name: 'app_example_index', methods: ['GET'])]
    public function index(ExampleRepository $exampleRepository): Response
    {
        return $this->render('example/index.html.twig', [
            'examples' => $exampleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_example_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ExampleRepository $exampleRepository): Response
    {
        $example = new Example();
        $form = $this->createForm(ExampleType::class, $example);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $exampleRepository->add($example, true);

            return $this->redirectToRoute('app_example_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('example/new.html.twig', [
            'example' => $example,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_example_show', methods: ['GET'])]
    public function show(Example $example): Response
    {
        return $this->render('example/show.html.twig', [
            'example' => $example,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_example_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Example $example, ExampleRepository $exampleRepository): Response
    {
        $form = $this->createForm(ExampleType::class, $example);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $exampleRepository->add($example, true);

            return $this->redirectToRoute('app_example_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('example/edit.html.twig', [
            'example' => $example,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_example_delete', methods: ['POST'])]
    public function delete(Request $request, Example $example, ExampleRepository $exampleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$example->getId(), $request->request->get('_token'))) {
            $exampleRepository->remove($example, true);
        }

        return $this->redirectToRoute('app_example_index', [], Response::HTTP_SEE_OTHER);
    }
}
