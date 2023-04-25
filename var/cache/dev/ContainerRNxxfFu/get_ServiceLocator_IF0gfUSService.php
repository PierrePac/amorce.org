<?php

namespace ContainerRNxxfFu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IF0gfUSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iF0gfUS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iF0gfUS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'photoRepository' => ['privates', 'App\\Repository\\PhotoRepository', 'getPhotoRepositoryService', true],
            'produit' => ['privates', '.errored..service_locator.iF0gfUS.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.iF0gfUS": it needs an instance of "App\\Entity\\Produit" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'photoRepository' => 'App\\Repository\\PhotoRepository',
            'produit' => 'App\\Entity\\Produit',
        ]);
    }
}
