<?php

namespace ContainerTwA5YvC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3N8yshaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3N8ysha' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3N8ysha'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'option' => ['privates', '.errored..service_locator.3N8ysha.App\\Entity\\Option', NULL, 'Cannot autowire service ".service_locator.3N8ysha": it references class "App\\Entity\\Option" but no such service exists.'],
        ], [
            'option' => 'App\\Entity\\Option',
        ]);
    }
}
