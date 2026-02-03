<?php

declare(strict_types=1);

namespace MauticPlugin\MyPluginBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use MauticPlugin\MyPluginBundle\Entity\MyPluginSettings;

class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder , array $options): void
    {
        $builder
            ->add('enabled' , CheckboxType::class ,[
                'label' => 'Enable plugin',
                'required' => false
            ])
            ->add('textOne' ,TextType::class, [
                'label' => 'Text Field One',
                'required' => true
            ])
            ->add('textTwo', TextType::class, [
                'label' => 'Text Field Two',
                'required' => true
            ])
            ->add('save' ,SubmitType::class ,[
                'label' => 'Save Settings',
                'attr' => ['class' => 'btn btn-primary']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
            $resolver->setDefaults([
                'data_class' => MyPluginSettings::class,
                'csrf_protection' => true
            ]);
    }
}
