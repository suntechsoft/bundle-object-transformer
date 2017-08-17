<?php

declare(strict_types=1);

namespace GlobalGames\Bundle\ObjectTransformerBundle;

use GlobalGames\Bundle\ObjectTransformerBundle\DependencyInjection\Compiler\ObjectTransformerCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bridge between ObjectTransformer library and Symfony framework.
 *
 * @author Alexander Matsenko <a.matsenko@globalgames.net>
 */
class ObjectTransformerBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ObjectTransformerCompilerPass());
    }
}
