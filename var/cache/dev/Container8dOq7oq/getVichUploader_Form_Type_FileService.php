<?php

namespace Container8dOq7oq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Form_Type_FileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'vich_uploader.form.type.file' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichFileType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'VichFileType.php';

        return $container->services['vich_uploader.form.type.file'] = new \Vich\UploaderBundle\Form\Type\VichFileType(($container->privates['vich_uploader.storage.file_system'] ?? $container->getVichUploader_Storage_FileSystemService()), ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService')), ($container->privates['vich_uploader.property_mapping_factory'] ?? $container->getVichUploader_PropertyMappingFactoryService()), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));
    }
}
