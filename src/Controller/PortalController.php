<?php

namespace App\Controller;

use App\Repository\BudgetLineRepository;
use App\Repository\InvoiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class PortalController extends AbstractController
{
    #[Route('/{_locale}_MobilityPortal', name: 'home')]
    public function home() {
        return $this->render('pages/home.html.twig');
    }

    #[Route('/{_locale}_GeneralView', name: 'GeneralView')]
    public function GeneralView( BudgetLineRepository $repo2): Response
    {
        $budget_lines = $repo2->findAll();

        return $this->render('pages/GeneralView.html.twig', [
            'budget_lines' => $budget_lines,
        ]);
    }

    #[Route('/{_locale}/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('pages/apphomeindex.html.twig');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): Response
    {
        throw new \Exception();
    }

   
    
}