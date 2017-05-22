<?php

namespace OpoloGroup\BaseBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class OpoloGroupBaseExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        // Load the services.yml file so our global twig parameter
        // is registered and available, and the assetic.yml file so
        // that we can configure assetic.
        $loader = new YamlFileLoader(
            $container,
             new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.yml');
        $loader->load('assetic.yml');
    }
}