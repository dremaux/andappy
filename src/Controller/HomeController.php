<?php
namespace App\Controller;

use App\Entity\User;
use App\Repository\PropertyRepository;
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


class HomeController extends AbstractController
{

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="home")
     * @param PropertyRepository $repository
     * @return Response
     */
    public function index(PropertyRepository $repository): Response 
    {
        $properties = $repository->findLastest();
        return $this->render('pages/home.html.twig',['properties' => $properties]);
    }

    public function upcoins(ObjectManager $manager):void
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
        {    
            $user = $this->User->getUsername();
            $coins = $this->User->getCoins();
            $coins = $coins + 50;

            //$sql ='UPDATE user SET coins='.$coins.' WHERE username ='.$user;
            //$manager->persist($sql);
            
            $user->setCoins($coins);
            $manager->persist($user);

            $manager->flush();
        }
    }  
}
?>