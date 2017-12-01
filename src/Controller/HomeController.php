<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("home/index")
     * @return \Symfony\Component\HttpFoundation\Response|static
     * @throws \InvalidArgumentException
     */
    public function index()
    {
        try {
            $number = random_int(100, 2000);

            return Response::create(
                '<html><body>Lucky number: ' . $number . '</body></html>'
            );
        } catch (\Exception $e) {
            return new Response($e->getMessage());
        }

    }
}
