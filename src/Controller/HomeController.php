<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    //Function-1 does the plus of two numbers passed as header params
    #[Route('/Function-1', name: 'app_Function-1')]
    public function Function1(Request $request): Response
    {
        $plus_result = $_GET['Number1']+$_GET['Number2'];

        return new JsonResponse(
            [
                'plus_result' => $plus_result
            ]
        );
    }


}
