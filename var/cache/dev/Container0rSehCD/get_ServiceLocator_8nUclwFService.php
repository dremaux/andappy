<?php

namespace Container0rSehCD;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8nUclwFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8nUclwF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8nUclwF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'request' => ['privates', '.errored..service_locator.8nUclwF.Symfony\\Component\\BrowserKit\\Request', NULL, 'Cannot autowire service ".service_locator.8nUclwF": it references class "Symfony\\Component\\BrowserKit\\Request" but no such service exists.'],
        ], [
            'manager' => '?',
            'request' => 'Symfony\\Component\\BrowserKit\\Request',
        ]);
    }
}
