<?php

namespace App\Form\Admin;

use App\Entity\Admin\Setting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('keywords')
            ->add('company')
            ->add('adress')
            ->add('fax')
            ->add('phone')
            ->add('email')
            ->add('smtpserver')
            ->add('smtpemail')
            ->add('smptpassword')
            ->add('smtpport')
            ->add('aboutus')
            ->add('contact')
            ->add('referances')
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Setting::class,
            'csrf_protection' => false,

        ]);
    }
}
