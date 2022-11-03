<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Painting;
use App\Entity\Technic;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PaintType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de la peinture',
            ])
            ->add('author', TextType::class, [
                'label' => 'Nom de l\'auteur',
            ])
            ->add('date', TextType::class, [
                'label' => 'Date de parution',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Histoire',
            ])
            ->add('category', EntityType::class, [
                'label' => 'Catégorie',
                'class'         => Category::class,
                'choice_label'  => 'name',
                'placeholder'   => 'Sélectionnez...',
            ])
            ->add('technic', EntityType::class, [
                'label' => 'Technique',
                'class'         => Technic::class,
                'choice_label'  => 'name',
                'placeholder'   => 'Sélectionnez ...'
            ])
            ->add('height', TextType::class, [
                'label' => 'Hauteur'
            ])
            ->add('width', TextType::class, [
                'label' => 'Largeur'
            ])
            ->add('visible', ChoiceType::class, [
                'label' => 'Afficher',
                'choices' => ['Oui' => 1, 'Non' => 0]
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
            'data_class' => Painting::class,
        ]);
    }
}