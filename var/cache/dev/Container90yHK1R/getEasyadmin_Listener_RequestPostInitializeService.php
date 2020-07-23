<?php

namespace Container90yHK1R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Listener_RequestPostInitializeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'easyadmin.listener.request_post_initialize' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\EventListener\\RequestPostInitializeListener.php';

        return $container->services['easyadmin.listener.request_post_initialize'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
