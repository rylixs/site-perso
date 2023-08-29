<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\Cache;
use Symfony\Component\Routing\Annotation\Route;

final class OverviewController extends AbstractController
{
    #[Route('/', name: 'app_overview')]
    #[Cache(maxage: 3600, public: true, mustRevalidate: true)]
    public function __invoke(): Response
    {
        return $this->render('pages/overview/index.html.twig');
    }
}
