<?php

namespace ContainerNbGKj4w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_PasswordHasherFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.password_hasher_factory' shared service.
     *
     * @return \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'PasswordHasherFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'PasswordHasherFactory.php';

        return $container->privates['security.password_hasher_factory'] = new \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory(['App\\Entity\\User' => ['class' => 'Symfony\\Component\\PasswordHasher\\Hasher\\NativePasswordHasher', 'arguments' => [0 => NULL, 1 => NULL, 2 => 12, 3 => '2y']]]);
    }
}
