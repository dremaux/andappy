<?php

namespace App\Controller;
use App\Controller\CAgence;
use App\Entity\CAgence as EntityCAgance;
use App\Entity\Property;
use App\Entity\PropertySearch;
use App\Form\CAgenceType;
use App\Form\PropertySearchType;
use App\Repository\PropertyRepository;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @var PropertyRepository
     */
    private $repository;

    /**
     * @var ObjectManadger
     */
    private $em;

    public function __construct(PropertyRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em; 
    }

    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $search = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $search);
        $form->handleRequest($request);
        
        $properties = $paginator->paginate(
            $this->repository->findAllVisibleQuery($search),
            $request->query->getInt('page',1),
            12
        );
        return $this->render('property/index.html.twig', [
            'current_menu'  => 'properties',
            'properties'    => $properties,
            'form'          => $form->createView() 
        ]);

    }

    /**
     * @Route("/biens/{slug}-{id}", name="property.show", requirements ={"slug": "[a-z0-9\-]*"})
     * @return Property $property
     * @return Response
     */
    public function show(Property $property, string $slug, Request $request):Response
    {
        if($property->getSlug() !== $slug)
        {
            $this->redirectToRoute('property.show', [
                'id' => $property->getId(), 
                'slug' => $property->getSlug()
            ], 301); 
        }
        
        $cagence = new EntityCAgance();
        $cagence->setProperty($property);
        $form = $this->createForm(CAgenceType::class, $cagence);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            $this->addFlash('success', 'Votre mail à bien été envoyé');
            return $this->redirectToRoute('property.show', [
                'id' => $property->getId(), 
                'slug' => $property->getSlug()
            ], 301); 
        }

        return $this->render('property/show.html.twig', [
            'property' => $property,
            'current_menu' => 'properties',
            'form' => $form->createView()]);
    }
}
