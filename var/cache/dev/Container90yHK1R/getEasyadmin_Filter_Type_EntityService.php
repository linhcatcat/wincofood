<?php

namespace Container90yHK1R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Filter_Type_EntityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.filter.type.entity' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\EntityFilterType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\EntityFilterType.php';

        return $container->privates['easyadmin.filter.type.entity'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\EntityFilterType();
    }
}
