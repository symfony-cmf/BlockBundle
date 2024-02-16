<?php

declare(strict_types=1);

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\BlockBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This class contains the configuration information for the bundle.
 *
 * This information is solely responsible for how the different configuration
 * sections are normalized, and merged.
 *
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('cmf_block');
        // Keep compatibility with symfony/config < 4.2
        if (!method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->root('cmf_block');
        } else {
            $rootNode = $treeBuilder->getRootNode();
        }

        $rootNode
            ->children()
                ->arrayNode('persistence')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('phpcr')
                            ->addDefaultsIfNotSet()
                            ->canBeEnabled()
                            ->children()
                                ->scalarNode('block_basepath')->defaultValue('/cms/content')->end()
                                ->scalarNode('manager_name')->defaultNull()->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('twig')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('cmf_embed_blocks')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('prefix')->defaultValue('%embed-block|')->end()
                                ->scalarNode('postfix')->defaultValue('|end%')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()

                ->arrayNode('caches')
                    ->children()
                        ->arrayNode('varnish')
                            ->fixXmlConfig('server')
                            ->children()
                                ->scalarNode('token')->defaultValue(hash('sha256', uniqid((string) mt_rand(), true)))->end()
                                ->scalarNode('version')->defaultValue(2)->end()
                                ->arrayNode('servers')
                                    ->prototype('scalar')->end()
                                ->end()
                            ->end()
                        ->end()
                        ->arrayNode('ssi')
                            ->children()
                                ->scalarNode('token')->defaultValue(hash('sha256', uniqid((string) mt_rand(), true)))->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
