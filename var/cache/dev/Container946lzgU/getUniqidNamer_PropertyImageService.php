<?php

namespace Container946lzgU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUniqidNamer_PropertyImageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer.property_image' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'NamerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'Polyfill'.\DIRECTORY_SEPARATOR.'FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'UniqidNamer.php';

        return $container->services['Vich\\UploaderBundle\\Naming\\UniqidNamer.property_image'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }
}
