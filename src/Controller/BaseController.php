<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends AbstractController
{
    public function __construct(
        private readonly RequestStack $requestStack,
    ) {
    }

    /**
     * Retourne une réponse avec le code HTTP 304 (Not Modified)
     * lorsque le contenu est le même que celui présent en cache du navigateur.
     */
    public function cachableRender(Response $response): Response
    {
        $response->setPublic();
        $response->setEtag(md5($response->getContent()));
        $response->isNotModified($this->requestStack->getCurrentRequest());

        return $response;
    }
}
