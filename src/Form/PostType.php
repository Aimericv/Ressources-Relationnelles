<?php

namespace App\Form;

use App\Entity\Address;
use App\Entity\Post;
use App\Entity\PostStatus;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            //->add('img')
            ->add('img', FileType::class, [
                'label' => 'Image',
                'mapped' => 'false',
                //'base_path' => 'images/',
                //'upload_dir' => '/public/images'
            ])

            ->add('content')
            ->add('description')
            ->add('type')
            ->add('user', EntityType::class, [
                'class' => User::class,
'choice_label' => 'id',
            ])
            ->add('status', EntityType::class, [
                'class' => PostStatus::class,
'choice_label' => 'id',
            ])
            ->add('address', EntityType::class, [
                'class' => Address::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
