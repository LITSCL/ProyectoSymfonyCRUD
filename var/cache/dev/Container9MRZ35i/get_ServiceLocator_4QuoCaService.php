<?php

namespace Container9MRZ35i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4QuoCaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4Quo_Ca' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4Quo_Ca'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\TareaController::delete' => ['privates', '.service_locator.qLi5U4n', 'get_ServiceLocator_QLi5U4nService', true],
            'App\\Controller\\TareaController::detalle' => ['privates', '.service_locator.Vks9FhF', 'get_ServiceLocator_Vks9FhFService', true],
            'App\\Controller\\TareaController::editar' => ['privates', '.service_locator.qLi5U4n', 'get_ServiceLocator_QLi5U4nService', true],
            'App\\Controller\\TareaController::misTareas' => ['privates', '.service_locator.eHmc8om', 'get_ServiceLocator_EHmc8omService', true],
            'App\\Controller\\TareaController::save' => ['privates', '.service_locator.MRcnjDE', 'get_ServiceLocator_MRcnjDEService', true],
            'App\\Controller\\TareaController::update' => ['privates', '.service_locator.MRcnjDE', 'get_ServiceLocator_MRcnjDEService', true],
            'App\\Controller\\UsuarioController::autenticarSesion' => ['privates', '.service_locator.k7.HWhG', 'get_ServiceLocator_K7_HWhGService', true],
            'App\\Controller\\UsuarioController::errorSesion' => ['privates', '.service_locator.k7.HWhG', 'get_ServiceLocator_K7_HWhGService', true],
            'App\\Controller\\UsuarioController::save' => ['privates', '.service_locator.9FdOQ28', 'get_ServiceLocator_9FdOQ28Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\TareaController:delete' => ['privates', '.service_locator.qLi5U4n', 'get_ServiceLocator_QLi5U4nService', true],
            'App\\Controller\\TareaController:detalle' => ['privates', '.service_locator.Vks9FhF', 'get_ServiceLocator_Vks9FhFService', true],
            'App\\Controller\\TareaController:editar' => ['privates', '.service_locator.qLi5U4n', 'get_ServiceLocator_QLi5U4nService', true],
            'App\\Controller\\TareaController:misTareas' => ['privates', '.service_locator.eHmc8om', 'get_ServiceLocator_EHmc8omService', true],
            'App\\Controller\\TareaController:save' => ['privates', '.service_locator.MRcnjDE', 'get_ServiceLocator_MRcnjDEService', true],
            'App\\Controller\\TareaController:update' => ['privates', '.service_locator.MRcnjDE', 'get_ServiceLocator_MRcnjDEService', true],
            'App\\Controller\\UsuarioController:autenticarSesion' => ['privates', '.service_locator.k7.HWhG', 'get_ServiceLocator_K7_HWhGService', true],
            'App\\Controller\\UsuarioController:errorSesion' => ['privates', '.service_locator.k7.HWhG', 'get_ServiceLocator_K7_HWhGService', true],
            'App\\Controller\\UsuarioController:save' => ['privates', '.service_locator.9FdOQ28', 'get_ServiceLocator_9FdOQ28Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\TareaController::delete' => '?',
            'App\\Controller\\TareaController::detalle' => '?',
            'App\\Controller\\TareaController::editar' => '?',
            'App\\Controller\\TareaController::misTareas' => '?',
            'App\\Controller\\TareaController::save' => '?',
            'App\\Controller\\TareaController::update' => '?',
            'App\\Controller\\UsuarioController::autenticarSesion' => '?',
            'App\\Controller\\UsuarioController::errorSesion' => '?',
            'App\\Controller\\UsuarioController::save' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\TareaController:delete' => '?',
            'App\\Controller\\TareaController:detalle' => '?',
            'App\\Controller\\TareaController:editar' => '?',
            'App\\Controller\\TareaController:misTareas' => '?',
            'App\\Controller\\TareaController:save' => '?',
            'App\\Controller\\TareaController:update' => '?',
            'App\\Controller\\UsuarioController:autenticarSesion' => '?',
            'App\\Controller\\UsuarioController:errorSesion' => '?',
            'App\\Controller\\UsuarioController:save' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
