<?php
namespace App\Controller;

use Symfony\Component\Httpfoundation\Response;
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
     * @Route("/shop", name="shop")
     */
    public function index(): Response
    {
        return new Response($this->twig->render('shop/shop.html.twig'));
    }

}

?>