<?php
namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

Class ShopController extends AbstractController
{
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;        
    }

    /**
     * @Route("/shop", name="shop.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->twig->render('shop/index.html.twig');
    }

}
