<?php

namespace Api\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiProductController extends AbstractController
{
    #[Route('/products', name: 'list_products')]
    public function listProducts(): JsonResponse
    {
        return $this->json(['context'=>'api'],200);
    }
}