<?php

namespace App\Service;

use App\Repository\ReportRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ReportService
{
    private string $telegramToken;
    private ReportRepository $reportRepository;

    public function __construct(ParameterBagInterface $parameterBag, ReportRepository $reportRepository, LoggerInterface $logger)
    {
        $logger->info('ReportService');
        $this->telegramToken = $parameterBag->get('telegram')['token'];
        $this->reportRepository = $reportRepository;
    }


    public function getReport()
    {
        return;
        $reports = $this->reportRepository->findByType('test');

        return $reports;
    }
}
