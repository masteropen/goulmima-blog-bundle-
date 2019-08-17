<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Acme\BlogBundle\Goulmima\BlogBundle\DependencyInjection;

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
                    ->arrayNode('entities')
                        ->children()
                            ->scalarNode('author')->isRequired()->cannotBeEmpty()->end()
                            ->variableNode('post')->isRequired()->cannotBeEmpty()->end()
                            ->variableNode('comment')->isRequired()->cannotBeEmpty()->end()
                        ->end()
                    ->end()
                ->end();

        return $treeBuilder;
    }
}
