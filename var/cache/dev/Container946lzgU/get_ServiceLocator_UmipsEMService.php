<?php

namespace Container946lzgU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UmipsEMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.umipsEM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.umipsEM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agence' => ['privates', '.errored..service_locator.umipsEM.App\\Entity\\Agence', NULL, 'Cannot autowire service ".service_locator.umipsEM": it references class "App\\Entity\\Agence" but no such service exists.'],
        ], [
            'agence' => 'App\\Entity\\Agence',
        ]);
    }
}
