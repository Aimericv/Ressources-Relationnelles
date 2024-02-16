<?php

namespace ContainerYLv9Cgu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7PIvIXDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7PIvIXD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7PIvIXD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'helpEntityRepository' => ['privates', 'App\\Repository\\HelpEntityRepository', 'getHelpEntityRepositoryService', true],
        ], [
            'helpEntityRepository' => 'App\\Repository\\HelpEntityRepository',
        ]);
    }
}
