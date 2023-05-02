<?php

namespace App\Controller;

use App\Service\ReportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    #[Route('/report', name: 'app_report')]
    public function index(ReportService $reportService): Response
    {
        $reportService->getReport();

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ReportController.php',
        ]);
    }
}
