<?php

/*
 * This file is part of Seminar Bundle.
 *
 * (c) Grundig Akademie
 *
 * @license LGPL-3.0-or-later
 */

namespace GrundigAkademie\HelloWorldBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController 
{
    /**
     * @Route("/test123456",
     *     name=TestController::class,
     *     defaults={"_scope": "frontend"}
     * )
     */
    public function __invoke(): Response
    {
        dump("test");
        return new Response('Hello2');
    }



}
