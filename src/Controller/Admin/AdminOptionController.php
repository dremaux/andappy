<?php

namespace App\Controller\Admin;

use App\Entity\Option;
use App\Form\OptionType;
use App\Repository\OptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

/**
* @var OptionRepository
*/
#[Route('/admin/option')]
class AdminOptionController extends AbstractController
{

    public function __construct(OptionRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    #[Route('/', name: 'admin.option.index', methods: ['GET'])]
    public function index(OptionRepository $optionRepository): Response
    {
        return $this->render('admin/option/index.html.twig', [
            'options' => $optionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'admin.option.new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $option = new Option();
        $form = $this->createForm(OptionType::class, $option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($option);
            $entityManager->flush();

            return $this->redirectToRoute('admin.option.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/option/new.html.twig', [
            'option' => $option,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin.option.edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Option $option): Response
    {
        $form = $this->createForm(OptionType::class, $option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin.option.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/option/edit.html.twig', [
            'option' => $option,
            'form' => $form,
        ]);
    }

    /**
     * @Route("admin/option/delete/{id}", name="admin.option.delete")
     * @param Option $option
     * @return \Symfony\Component\HttpFoudattion\RedirectResponse
     */

    public function delete(Option $option, Request $request)
    {    
        if ($this->isCsrfTokenValid('delete' . $option->getId(), $request->get('_token')))
        {
            $this->em->remove($option);
            $this->em->flush();
            $this->addFlash('success', 'suppression de votre bien');
        }
        return $this->redirectToRoute('admin.option.index');
    }


}
