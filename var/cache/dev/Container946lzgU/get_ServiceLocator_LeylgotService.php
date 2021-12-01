<?php

namespace Container946lzgU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LeylgotService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Leylgot' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Leylgot'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\PropertyRepository', 'getPropertyRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\PropertyRepository',
        ]);
    }
}
