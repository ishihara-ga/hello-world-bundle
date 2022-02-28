<?php


namespace GrundigAkademie\HelloWorldBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController{

    /**
     * @Route("/test123456",
     *     name=HelloWorldController::class,
     *     defaults={"_scope": "frontend"}
     * )
     */
    public function __invoke(): Response
    {
        return new Response('Hello World!');
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
