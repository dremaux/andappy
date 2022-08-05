<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;


class ShopController
{

    public function index()
    {
        return new Response('shop/home.html.twig');
    }

}