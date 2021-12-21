<?php
namespace Grafikart\RecaptchaBundle\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionResolver;

class RecaptchaSubmitType extends AbstractType {

    public function configuration (OptionsResolver $resolver){
        $resolver->setDefaults([
            'mapped' => false
        ]);
    }

    public function getBlockPrefix(){
        return 'recaptcha submit';
    }

    public function getParent(){
        return TextType::class;
    }
}


?>