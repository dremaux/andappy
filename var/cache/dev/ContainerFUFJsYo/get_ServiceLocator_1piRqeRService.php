<?php

namespace ContainerFUFJsYo;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1piRqeRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1piRqeR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1piRqeR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'optionRepository' => ['privates', 'App\\Repository\\OptionRepository', 'getOptionRepositoryService', true],
        ], [
            'optionRepository' => 'App\\Repository\\OptionRepository',
        ]);
    }
}