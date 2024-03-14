<?php

namespace Container75T4bG8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QMV0WDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q_mV0WD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q_mV0WD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'helpEntityRepository' => ['privates', 'App\\Repository\\HelpEntityRepository', 'getHelpEntityRepositoryService', true],
        ], [
            'entityManager' => '?',
            'helpEntityRepository' => 'App\\Repository\\HelpEntityRepository',
        ]);
    }
}
