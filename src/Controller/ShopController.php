<?php
namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseONType;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class ShopController extends AbstractController
{

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/randomQuestion", name="randomQuestion")
     * @return Response
     */
    public function index(Request $request, EntityManagerInterface $manager, QuestionRepository $questionRepository): Response 
    {
        $reponse = new Reponse();

        $form = $this->createForm(ReponseONType::class, $reponse);
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $reponse = $form->getData();
            $manager->persist($reponse);
            $manager->flush();
        }

        return $this->render('randomQuestion/home.html.twig', [
            'question' => $questionRepository->find(random_int(1, $questionRepository->count([]))),
            'form' => $form->createView(),
        ]);
        
    }

}