<?php
namespace Grafikart\RecaptchaBundle\DependencyInjection;

use ProxyManager\FileLocator\FileLocator as FileLocatorFileLocator;
use Symfony\Component\Asset\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFilenameLoader;

class RecaptchaExtension extends Extension {

    /**
     * Loads a specific configuration.
     * 
     * @throws \InvalidArgumentException when provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container)
    {

        $loader = new YamlFileLoader(
            $container,
            new FileLocatorFileLocator(__DIR__ . '/../Ressources/config')
        );
        $loader->load('services.yaml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $container->setParameter('recaptcha.secret', $config['secret']);
    }

}