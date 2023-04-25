<?php

namespace ContainerRNxxfFu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNavControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NavController' shared autowired service.
     *
     * @return \App\Controller\NavController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/NavController.php';

        $container->services['App\\Controller\\NavController'] = $instance = new \App\Controller\NavController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\NavController', $container));

        return $instance;
    }
}