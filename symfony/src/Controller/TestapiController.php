<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class TestapiController extends AbstractController
{
    #[Route('/api/test', name: 'app_testapi')]
    public function index(): JsonResponse
    {
        return new JsonResponse('test');
    }

    #[Route('/api/form', name: 'app_testapi2')]
    public function antwort(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $name = $data['firstName'] . "yASDE";

        return new JsonResponse($name);
    }
}
