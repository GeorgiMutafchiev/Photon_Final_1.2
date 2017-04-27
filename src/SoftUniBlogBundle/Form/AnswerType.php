<?php

namespace SoftUniBlogBundle\Form;

use SoftUniBlogBundle\Entity\Answer;
use SoftUniBlogBundle\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sender', TextType::class)
            ->add('postId', TextType::class)
            ->add('email', TextType::class)
            ->add('message', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Answer::class,
        ));
    }

}