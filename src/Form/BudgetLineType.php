<?php

namespace App\Form;

use App\Entity\BudgetLine;
use App\Entity\GeneralSetup;
use App\Repository\GeneralSetupRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BudgetLineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('line_nature', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.id = :value')
                        ->setParameter('value', '1')
                        ;
                },
            ])

            ->add('HorsBudget', ChoiceType::class, [
                'choices' => [
                        'Oui' => 'Oui', 
                        'Non' => 'Non',   
                ],])

            ->add('Manager', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '7')
                        ;
                },
            ])

            ->add('Year', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '12')
                        ;
                },
            ])

            ->add('Project', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '2')
                        ;
                },
            ])

            ->add('Society', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '3')
                        ;
                },
            ])

            ->add('label')

            ->add('application', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '4')
                        ;
                },
            ])

            ->add('provider', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '5')
                        ;
                },
            ])

            ->add('accounting_code', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '6')
                        ;
                },
            ])

            ->add('DivisionService', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '13')
                        ;
                },
            ])

            ->add('Regroupement', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '14')
                        ;
                },
            ])

            ->add('Type', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '10')
                        ;
                },
            ])

            ->add('Axe4', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '8')
                        ;
                },
            ])

            ->add('InvstCharge', EntityType::class, [
                'class' => GeneralSetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralSetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '9')
                        ;
                },
            ])

            



            ->add('Montant_Facture')
            ->add('Montant_Ouvert')
            ->add('AmountOT')
            ->add('RAmount')
            ->add('Commentaire')

            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-4 '
                ],
                'label' => 'Send Budget'
            ]);

            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BudgetLine::class,
        ]);
    }
}
