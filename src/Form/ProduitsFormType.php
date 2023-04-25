<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProduitsFormType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('refProduit', options:[
                'label' => 'Référence produit',
            ])
            ->add('shortLibel', options:[
                'label' => 'Nom du produit',
            ])
            ->add('longLibel', options:[
                'label' => 'Description',
            ])
            ->add('prixHt', options:[
                'label' => 'Prix Ht',
            ])
            ->add('idCategorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nomination',
                'label' => 'Categorie',
                'group_by' => 'sousCat.nomination',
                'query_builder' => function (CategorieRepository $cr) 
                {
                    return $cr->createQueryBuilder('c')
                        ->where('c.sous_cat IS NOT NULL')
                        ->orderBy('c.nomination', 'ASC');
                }
             ])
             ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false,
             ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
