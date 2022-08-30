<?php
namespace App\Controller;

use App\Entity\User;
use App\Repository\PropertyRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;
use Doctrine\DBAL\ParameterType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Persistence\ObjectManager;
use Psr\Log\LoggerInterface;
use SebastianBergmann\Environment\Console;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{

    public function __construct(Environment $twig, LoggerInterface $logger)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="home")
     * @param PropertyRepository $repository
     * @return Response
     */
    public function index(PropertyRepository $repository, UserRepository $userRepo, Request $request): Response 
    {
        // on va cherche toutes les infos
        $coins = $userRepo->findAll();


        if ($request->get('ajax')){
            $this->logger->info('test');
        }

        $properties = $repository->findLastest();
        return $this->render('pages/home.html.twig',compact('coins'));
    }

  
}
?>