<?php

namespace App\Controller\Admin;

use App\Entity\Option;
use App\Entity\Question;
use App\Form\OptionType;
use App\Repository\OptionRepository;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

/**
* @var OptionRepository
*/
#[Route('/admin/question')]
class AdminQuestionController extends AbstractController
{

    public function __construct(QuestionRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    #[Route('/', name: 'admin.question.index', methods: ['GET'])]
    public function index(QuestionRepository $questionRepository): Response
    {
        return $this->render('admin/question/index.html.twig', [
            'questions' => $questionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'admin.question.new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('admin.question.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/question/new.html.twig', [
            'question' => $question,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin.question.edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin.question.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/question/edit.html.twig', [
            'question' => $question,
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
