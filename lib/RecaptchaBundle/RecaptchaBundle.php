<?php
namespace Grafikart\RecaptchaBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RecaptchaBundle extends Bundle {

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    } 

}

?>