<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Goulmima\BlogBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('goulmima_blog');

        $treeBuilder
            ->getRootNode()
                ->children()
                    ->variableNode('db_driver')
                        ->defaultValue('orm')
                    ->end()
                    ->arrayNode('post')
                        ->children()
                        ->variableNode('class')
                            ->info('FQCN of the post entity')
                            ->defaultValue('App\\Entity\\Post')
                        ->end()
                        ->arrayNode('stats')
                            ->normalizeKeys(false)
                            ->useAttributeAsKey('type', true)
                            ->defaultValue([])
                            ->info('The list of entities to manage in the administration zone.')
                            ->prototype('variable')
                            ->end()
                        ->end()
                    ->end()
            ->end();

        return $treeBuilder;
    }
}
