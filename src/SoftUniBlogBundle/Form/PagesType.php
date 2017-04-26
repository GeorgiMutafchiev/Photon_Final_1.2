<?php

namespace SoftUniBlogBundle\Form;

use Doctrine\Common\Collections\ArrayCollection;
use SoftUniBlogBundle\Entity\Pages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('src', TextType::class)
            ->add('userId', TextType::class)
            ->add('elements', TextType::class)
            ->add('color', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Pages::class,
        ));
    }
}
