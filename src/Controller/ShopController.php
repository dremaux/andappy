<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ShopController
{


    /**
     * @Route("/shop", name="shop")
     */
    public function index()
    {
        return $this->render('shop/home.html.twig');
    }
}