<?php

namespace OroTestTask\ChainCommandBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('chain_command');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('chains')
                    ->arrayPrototype()
                        ->children()
                            ->scalarNode('parent')->end()
                            ->scalarNode('child')->end()
                        ->end()
                    ->end()
                ->end() // chains
            ->end()
        ;

        return $treeBuilder;
    }
}