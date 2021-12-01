<?php

namespace App\Controller\Admin;

use App\Entity\Agence;
use App\Form\AgenceType;
use App\Repository\AgenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/admin/agence')]
class AdminAgenceController extends AbstractController
{

    public function __construct(AgenceRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    #[Route('/', name: 'admin.agence.index', methods: ['GET'])]
    public function index(AgenceRepository $agenceRepository): Response
    {
        return $this->render('admin/agence/index.html.twig', [
            'agences' => $agenceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'admin.agence.new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $agence = new Agence();
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($agence);
            $entityManager->flush();

            return $this->redirectToRoute('admin.agence.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/agence/new.html.twig', [
            'agence' => $agence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin.agence.edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Agence $agence): Response
    {
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin.agence.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/agence/edit.html.twig', [
            'agence' => $agence,
            'form' => $form,
        ]);
    }

    /**
     * @Route("admin/agence/delete/{id}", name="admin.agence.delete")
     * @param Agence $agence
     * @return \Symfony\Component\HttpFoudattion\RedirectResponse
     */

    public function delete(Agence $agence, Request $request)
    {    
        if ($this->isCsrfTokenValid('delete' . $agence->getId(), $request->get('_token')))
        {
            $this->em->remove($agence);
            $this->em->flush();
            $this->addFlash('success', 'suppression de votre bien');
        }
        return $this->redirectToRoute('admin.agence.index');
    }
}
