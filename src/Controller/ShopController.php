<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

Class ShopController
{
    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;        
    }

    /**
     * @Route("/shop", name="shop.shop")
     * @return Response
     */
    public function index(): Response
    {
        return new Response($this->twig->render('shop/index.html.twig'));
    }

}

