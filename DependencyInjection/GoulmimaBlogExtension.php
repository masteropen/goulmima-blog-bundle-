<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Goulmima\BlogBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Load services files and resolve arguments.
 *
 * Class GoulmimaBlogExtension
 * @package Goulmima\BlogBundle\DependencyInjection
 */
class GoulmimaBlogExtension extends Extension
{
    /**
     * @inheritDoc
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yaml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        if (isset($config['post']) && isset($config['post']['class'])) {
            $container->getDefinition('Goulmima\BlogBundle\Utils\Aggregation\Aggregator')
                ->replaceArgument(
                    1,
                    $config['post']['class']
                );
        }

        if (isset($config['post']) && isset($config['post']['stats']) && isset($config['post']['stats'])) {
            $container->getDefinition('Goulmima\BlogBundle\Utils\Aggregation\Aggregator')
                ->replaceArgument(
                    2,
                    $config['post']['stats']
                );
        }
    }
}
