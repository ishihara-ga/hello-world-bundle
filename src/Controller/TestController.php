<?php

/*
 * This file is part of Seminar Bundle.
 *
 * (c) Grundig Akademie
 *
 * @license LGPL-3.0-or-later
 */

namespace GrundigAkademie\HelloWorldBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Twig\Environment as TwigEnvironment;

class TestController extends AbstractController
{
    /**
     * @Route("/newsletter",
     *     name=TestController::class,
     *     defaults={"_scope": "frontend"}
     * )
     */
    public function __invoke(): Response
    {
        return new Response('Hello');
    }



}
