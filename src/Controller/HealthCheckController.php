<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class HealthCheckController extends AbstractController
{
    #[Route('/health', name: 'app_health_check')]
    public function index(): JsonResponse
    {
        return $this->json([
            'status' => 'up',
        ]);
    }
}
