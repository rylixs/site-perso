<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class OverviewController extends BaseController
{
    #[Route('/', name: 'app_overview')]
    public function index(): Response
    {
        return $this->cachableRender($this->render('pages/overview/index.html.twig'));
    }
}
