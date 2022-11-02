<?php

namespace App\Form;

use App\Entity\Painting;
use App\Entity\Comments;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CommentForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author', TextType::class, [
                'label' => 'Nom & Prénom',
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Votre commentaire...',
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver) :void
    {
        $resolver->setDefaults([
            'data_class' => Comments::class,
        ]);
    }
}