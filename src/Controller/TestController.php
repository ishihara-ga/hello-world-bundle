<?php


namespace GrundigAkademie\HelloWorldBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController{

    /**
     * @Route("/test123456",
     *     name=TestController::class,
     *     defaults={"_scope": "frontend"}
     * )
     */
    public function __invoke(Request $request): Response
    {
        return new Response('Hello World!');
    }



}
