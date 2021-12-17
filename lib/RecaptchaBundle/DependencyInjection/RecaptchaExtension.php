<?php
namespace Grafikart\RecaptchaBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class RecaptchaExtention extends Extension{
    public function load(array $configs, ContainerBuilder $container)
    {
         $configuration = new Configuration();
         $config = $this->processConfiguration($configuration, $configs);
         dump($config); die();
    }
}   

?>