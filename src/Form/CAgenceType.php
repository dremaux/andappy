<?php

namespace App\Form;


use App\Entity\Agence;
use Symfony\Component\Console\Output\Output;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CAgenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $option)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'Prénom'])
            ->add('lastname', TextType::class, ['label' => 'Nom'])
            ->add('phone', TextType::class, ['label' => 'Tel'])
            ->add('email', EmailType::class)
            ->add('message', TextareaType::class)
            ->add('agences', EntityType::class, [
                'required' => false,
                'label' => false,
                'class' => Agence::class,
                'choice_label' => 'name',
                'multiple' => 'multiple'
            ])            
            ;
    }   

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['required' => Contact::class]);
    }

    private function recaptcha()
    {  
            if(isset($_POST['submitpost'])){
                if(isset($_POST['g-recaptcha-response'])){
                    $recaptcha = new \ReCaptcha\ReCaptcha('6LfnmLYdAAAAAN8R-5HYQVoI8c9dlAZ2XEf84Oqf');
                    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
                    if ($resp->isSuccess()) {
                        // Verified!
                    } else {
                        $errors = $resp->getErrorCodes();
                    }
                } else {
                    var_dump('Captcha non rempli');
                }
            }
    }
    
}
?>