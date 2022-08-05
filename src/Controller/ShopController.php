<?php
namespace App\Controller;

use Symfony\Component\Httpfoundation\Response;

Class ShopController
{
    /**
     * @var Environment
     */
    public function __construct($twig)
    {
        $this->twig = $twig;        
    }

    public function index(): Response
    {
        return new Response($this->twig->render('shop/shop.html.twig'));
    }

}


?>