<?php

namespace App\Controller;

use App\Entity\Example;
use App\Form\ExampleType;
use App\Repository\ExampleRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/exampleJson')]
class ExampleJsonController extends AbstractFOSRestController
{
    #[Route('/', name: 'app_exampleJson_index', methods: 'GET')]
    public function testJson(ExampleRepository $exampleRepository, Request $request): JsonResponse
    {
        $query = $request->get('query');
        $workers = $exampleRepository->findAll();
        $serializedEntity = $this->container->get('serializer')->serialize($workers, 'json');

//        return $this->view(['data' => $workers, 'count' => count($workers)], Response::HTTP_OK);
        return new JsonResponse(array('name' => $serializedEntity));
    }

    #[Route('/test', name: 'app_exampleJson_test', methods: 'GET')]
    public function testJsontest(ExampleRepository $exampleRepository, Request $request): View
    {
        $query = $request->get('query');
        $workers = $exampleRepository->findAll();
        $serializedEntity = $this->container->get('serializer')->serialize($workers, 'json');

        return $this->view(['data' => $workers, 'count' => count($workers)], Response::HTTP_OK);
//        return new JsonResponse(array('name' => $serializedEntity));
    }

}
