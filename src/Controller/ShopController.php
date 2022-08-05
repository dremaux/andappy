<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

Class ShopController
{

    /**
     * @var Environment
     */

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;        
    }
    
    public function index(): Response 
    {
        return new Response($this->twig->render('shop/index.html.twig'));
    }

}
