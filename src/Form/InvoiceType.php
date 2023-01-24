<?php

namespace App\Form;

use App\Entity\BudgetLine;
use App\Entity\GeneralSetup;
use App\Entity\Invoice;
use App\Repository\BudgetLineRepository;
use App\Repository\GeneralSetupRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('LineNature', EntityType::class, [
                'class' => Generalsetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralsetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.id = :value')
                        ->setParameter('value', '2')
                        ;
                },
            ])

            ->add('Manager', EntityType::class, [
                'class' => Generalsetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralsetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '7')
                        ;
                },
            ])

            ->add('Year', EntityType::class, [
                'class' => Generalsetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralsetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '12')
                        ;
                },
            ])

            ->add('LinkBudget', EntityType::class, [
                'class' => BudgetLine::class,
                'choice_label' => 'Label', // The field to use as the displayed value
                'choice_value' => 'Label', // The field to use as the actual value
                'query_builder' => function (BudgetLineRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.line_nature = :value')
                        ->setParameter('value', '1')
                        ;
                },
            ])

            ->add('Project', EntityType::class, [
                'class' => Generalsetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralsetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '2')
                        ;
                },
                
            ])

            ->add('Society', EntityType::class, [
                'class' => Generalsetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralsetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '3')
                        ;
                },
            ])

            ->add('Application', EntityType::class, [
                'class' => Generalsetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralsetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '4')
                        ;
                },
            ])

            ->add('Provider', EntityType::class, [
                'class' => Generalsetup::class,
                'choice_label' => 'Description', // The field to use as the displayed value
                'choice_value' => 'Description', // The field to use as the actual value
                'query_builder' => function (GeneralsetupRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.generalsetuptype = :value')
                        ->setParameter('value', '5')
                        ;
                },
            ])

            ->add('AccountingCode', EntityType::class, [
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

        ->add('Label')
        ->add('InvoiceNumber')
        ->add('InvoiceDate')
        ->add('AmountOT')
        ->add('RAmount')
        ->add('submit', SubmitType::class, [
            'attr' => [
                'class' => 'btn btn-primary',
            ],
            'label' => 'Send Invoice'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}


