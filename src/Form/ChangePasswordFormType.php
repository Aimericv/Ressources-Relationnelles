<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangePasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'label' => 'New password',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
