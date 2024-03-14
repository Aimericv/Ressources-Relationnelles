<?php

namespace ContainerFyfVJ6w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RnyZtc6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RnyZtc6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RnyZtc6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'imagesRepository' => ['privates', 'App\\Repository\\ImagesRepository', 'getImagesRepositoryService', true],
            'likeRepository' => ['privates', 'App\\Repository\\LikeRepository', 'getLikeRepositoryService', true],
            'paragraphesRepository' => ['privates', 'App\\Repository\\ParagraphesRepository', 'getParagraphesRepositoryService', true],
            'postRepository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'imagesRepository' => 'App\\Repository\\ImagesRepository',
            'likeRepository' => 'App\\Repository\\LikeRepository',
            'paragraphesRepository' => 'App\\Repository\\ParagraphesRepository',
            'postRepository' => 'App\\Repository\\PostRepository',
        ]);
    }
}
