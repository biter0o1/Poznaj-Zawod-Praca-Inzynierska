<?php

namespace App\Form;

use App\Entity\QuizContent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('text', TextType::class, [
                'label' => 'Stwierdzenie/Pytanie',
                'required' => true,
            ])
            ->add('personality', ChoiceType::class, [
                'label' => 'Osobowość',
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'Realistyczny-Praktyczny' => 'Realistyczny-Praktyczny',
                    'Badawczy' => 'Badawczy',
                    'Artystyczny' => 'Artystyczny',
                    'Spoleczny-Socjalny' => 'Spoleczny-Socjalny',
                    'Przedsiebiorczy' => 'Przedsiebiorczy',
                    'Konwencjonalny' => 'Konwencjonalny',
                ],

            ])
            ->add('personalitySign', TextType::class, [
                'label' => 'Znak Osobowości',
                'required' => true,
                'attr'=> [ 'readonly' => true ],

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => QuizContent::class,
        ]);
    }
}
