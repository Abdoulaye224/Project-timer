<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, ['label' => "Prénom",   'attr' => ['placeholder' => 'Entrez votre prénom']])
            ->add('lastName', TextType::class, ['label' => "Nom", 'attr' => ['placeholder' => 'Entrez votre nom']])
            ->add('email', EmailType::class, [ 'attr' => ['placeholder' => 'Entrez votre email']])
            ->add('password', RepeatedType::class, [
            'type' => PasswordType::class,
            'first_options' => ['label' => 'Mot de passe', 'attr' => ['placeholder' => 'Entrez votre mot de passe']],
            'second_options' => ['label' => "Répéter le mot de passe", 'attr' => ['placeholder' => 'Entrez à nouveau votre mot de passe']],
        ])
            ->add('save', SubmitType::class, ['attr' => ['class' => "btn btn-lg btn-success"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
