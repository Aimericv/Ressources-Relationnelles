<?php

namespace ContainerFyfVJ6w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8EFOMQ0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8EFOMQ0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8EFOMQ0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'catRepo' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
        ], [
            'catRepo' => 'App\\Repository\\CategoryRepository',
        ]);
    }
}
