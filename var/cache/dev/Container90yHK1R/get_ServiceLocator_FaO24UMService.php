<?php

namespace Container90yHK1R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FaO24UMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FaO24UM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FaO24UM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccountController::reset' => ['privates', '.service_locator.wlggFXq', 'get_ServiceLocator_WlggFXqService', true],
            'App\\Controller\\ArticleController::list' => ['privates', '.service_locator.VOaPioS', 'get_ServiceLocator_VOaPioSService', true],
            'App\\Controller\\ArticleController::profile' => ['privates', '.service_locator.8oTFIqj', 'get_ServiceLocator_8oTFIqjService', true],
            'App\\Controller\\ArticleController::sendEmail' => ['privates', '.service_locator.g8Ohtqp', 'get_ServiceLocator_G8OhtqpService', true],
            'App\\Controller\\RegisterController::register' => ['privates', '.service_locator.wlggFXq', 'get_ServiceLocator_WlggFXqService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'FM\\ElfinderBundle\\Controller\\ElFinderController::load' => ['privates', '.service_locator.F8XCVeq', 'get_ServiceLocator_F8XCVeqService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AccountController:reset' => ['privates', '.service_locator.wlggFXq', 'get_ServiceLocator_WlggFXqService', true],
            'App\\Controller\\ArticleController:list' => ['privates', '.service_locator.VOaPioS', 'get_ServiceLocator_VOaPioSService', true],
            'App\\Controller\\ArticleController:profile' => ['privates', '.service_locator.8oTFIqj', 'get_ServiceLocator_8oTFIqjService', true],
            'App\\Controller\\ArticleController:sendEmail' => ['privates', '.service_locator.g8Ohtqp', 'get_ServiceLocator_G8OhtqpService', true],
            'App\\Controller\\RegisterController:register' => ['privates', '.service_locator.wlggFXq', 'get_ServiceLocator_WlggFXqService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'FM\\ElfinderBundle\\Controller\\ElFinderController:load' => ['privates', '.service_locator.F8XCVeq', 'get_ServiceLocator_F8XCVeqService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AccountController::reset' => '?',
            'App\\Controller\\ArticleController::list' => '?',
            'App\\Controller\\ArticleController::profile' => '?',
            'App\\Controller\\ArticleController::sendEmail' => '?',
            'App\\Controller\\RegisterController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'FM\\ElfinderBundle\\Controller\\ElFinderController::load' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AccountController:reset' => '?',
            'App\\Controller\\ArticleController:list' => '?',
            'App\\Controller\\ArticleController:profile' => '?',
            'App\\Controller\\ArticleController:sendEmail' => '?',
            'App\\Controller\\RegisterController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'FM\\ElfinderBundle\\Controller\\ElFinderController:load' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
