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
use  Psr\Container\ContainerInterface;

class TestController extends AbstractController
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @Route("/test123456",
     *     name=TestController::class,
     *     defaults={"_scope": "frontend"}
     * )
     */
    public function __invoke(): Response
    {
        return new Response('Hell2o');
    }

    /**
     * @Route("/contao/hello",
     *     name="hello",
     *     defaults={"_scope": "backend"}
     * )
     */
    public function hello(Request $request): Response
    {
        return new Response('Hello World!');
    }

}
