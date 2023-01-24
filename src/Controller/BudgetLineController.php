<?php

namespace App\Controller;

use App\Entity\BudgetLine;
use App\Form\BudgetLineType;
use App\Form\InvoiceBudgetLineType;
use App\Repository\BudgetLineRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BudgetLineController extends AbstractController
{
    #[Route('/budgetline', name: 'app_budget_line_index', methods: ['GET'])]
    public function index(BudgetLineRepository $budgetLineRepository): Response
    {
        return $this->render('budget_setup/budget_line/index.html.twig', [
            'budget_lines' => $budgetLineRepository->findAll(),
        ]);
    }

    #[Route('/newbudgetline', name: 'app_budget_line_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BudgetLineRepository $budgetLineRepository): Response
    {
        $budgetLine = new BudgetLine();
        $form = $this->createForm(BudgetLineType::class, $budgetLine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $budgetLineRepository->save($budgetLine, true);

            return $this->redirectToRoute('app_budget_line_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('budget_setup/budget_line/new.html.twig', [
            'budget_line' => $budgetLine,
            'form' => $form,
        ]);
    }

    #[Route('/newInvoice', name: 'app_invoice_budget_line_new', methods: ['GET', 'POST'])]
    public function newinvoice(Request $request, BudgetLineRepository $budgetLineRepository): Response
    {
        $budgetLine = new BudgetLine();
        $form = $this->createForm(InvoiceBudgetLineType::class, $budgetLine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $budgetLineRepository->save($budgetLine, true);

            return $this->redirectToRoute('app_budget_line_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('budget_setup/budget_line/InvoiceForm.html.twig', [
            'budget_line' => $budgetLine,
            'form' => $form,
        ]);
    }

    #[Route('/{id}_edit_budgetline', name: 'app_budget_line_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, BudgetLine $budgetLine, BudgetLineRepository $budgetLineRepository): Response
    {
        $form = $this->createForm(BudgetLineType::class, $budgetLine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $budgetLineRepository->save($budgetLine, true);

            return $this->redirectToRoute('app_budget_line_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('budget_setup/budget_line/edit.html.twig', [
            'budget_line' => $budgetLine,
            'form' => $form,
        ]);
    }

    #[Route('/budgetline/delete/{id}', name: 'app_budget_line_delete', methods: ['GET'])]
    public function delete(
        EntityManagerInterface $manager,
        BudgetLine $budgetLine
    ): Response {
        $manager->remove($budgetLine);
        $manager->flush();

        return $this->redirectToRoute('app_budget_line_index');
    }
}
