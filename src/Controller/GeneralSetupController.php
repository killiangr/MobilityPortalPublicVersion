<?php

namespace App\Controller;

use App\Entity\GeneralSetup;
use App\Form\GeneralSetupType;
use App\Repository\GeneralSetupRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class GeneralSetupController extends AbstractController
{
    #[Route('/generalsetup', name: 'app_general_setup_index', methods: ['GET'])]
    public function index(GeneralSetupRepository $generalSetupRepository): Response
    {
        return $this->render('budget_setup/general_setup/index.html.twig', [
            'general_setups' => $generalSetupRepository->findAll(),
        ]);
    }

    #[Route('/generalsetup_new', name: 'app_general_setup_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GeneralSetupRepository $generalSetupRepository): Response
    {
        $generalSetup = new GeneralSetup();
        $form = $this->createForm(GeneralSetupType::class, $generalSetup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $generalSetupRepository->save($generalSetup, true);

            return $this->redirectToRoute('app_general_setup_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('budget_setup/general_setup/new.html.twig', [
            'general_setup' => $generalSetup,
            'form' => $form,
        ]);
    }

    #[Route('/editgeneralsetup_{id}', name: 'app_general_setup_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GeneralSetup $generalSetup, GeneralSetupRepository $generalSetupRepository): Response
    {
        $form = $this->createForm(GeneralSetupType::class, $generalSetup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $generalSetupRepository->save($generalSetup, true);

            return $this->redirectToRoute('app_general_setup_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('budget_setup/general_setup/edit.html.twig', [
            'general_setup' => $generalSetup,
            'form' => $form,
        ]);
    }


    #[Route('/generalsetup/delete/{id}', name: 'app_general_setup_delete', methods: ['GET'])]
    public function delete(
        EntityManagerInterface $manager,
        Generalsetup $generalsetup
    ): Response {
        $manager->remove($generalsetup);
        $manager->flush();

        return $this->redirectToRoute('app_general_setup_index');
    }
}
