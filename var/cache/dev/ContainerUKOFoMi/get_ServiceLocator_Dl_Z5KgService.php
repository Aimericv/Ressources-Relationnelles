<?php

namespace ContainerUKOFoMi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dl_Z5KgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Dl.z5Kg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Dl.z5Kg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\PostCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\PostCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\PostCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\PostCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\PostCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\PostCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\PostCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PostCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PostCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\PostCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PostCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PostCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PostCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PostCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\DefaultController::base' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\DefaultController::catalogue' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\DefaultController::post' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\DefaultController::postDetail' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController::delete' => ['privates', '.service_locator.ckGzNSR', 'get_ServiceLocator_CkGzNSRService', true],
            'App\\Controller\\PostController::edit' => ['privates', '.service_locator.ckGzNSR', 'get_ServiceLocator_CkGzNSRService', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PostController::show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.oogCZpI', 'get_ServiceLocator_OogCZpIService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\UserController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\UserController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\UserController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\UserController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\UserController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\UserController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\UserController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\UserController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\UserController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\UserController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::register' => ['privates', '.service_locator.px4d2ES', 'get_ServiceLocator_Px4d2ESService', true],
            'App\\Controller\\UserController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\PostCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\PostCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\PostCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\PostCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\PostCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\PostCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\PostCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PostCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PostCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\PostCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PostCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\PostCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PostCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PostCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PostCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\DefaultController:base' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\DefaultController:catalogue' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\DefaultController:post' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\DefaultController:postDetail' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController:delete' => ['privates', '.service_locator.ckGzNSR', 'get_ServiceLocator_CkGzNSRService', true],
            'App\\Controller\\PostController:edit' => ['privates', '.service_locator.ckGzNSR', 'get_ServiceLocator_CkGzNSRService', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PostController:show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.oogCZpI', 'get_ServiceLocator_OogCZpIService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\UserController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\UserController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\UserController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\UserController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\UserController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\UserController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\UserController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\UserController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\UserController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\UserController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:register' => ['privates', '.service_locator.px4d2ES', 'get_ServiceLocator_Px4d2ESService', true],
            'App\\Controller\\UserController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\UserController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\PostCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\PostCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\PostCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PostCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\PostCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\PostCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController::delete' => '?',
            'App\\Controller\\Admin\\PostCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController::detail' => '?',
            'App\\Controller\\Admin\\PostCrudController::edit' => '?',
            'App\\Controller\\Admin\\PostCrudController::index' => '?',
            'App\\Controller\\Admin\\PostCrudController::new' => '?',
            'App\\Controller\\Admin\\PostCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\PostCrudController::updateEntity' => '?',
            'App\\Controller\\DefaultController::base' => '?',
            'App\\Controller\\DefaultController::catalogue' => '?',
            'App\\Controller\\DefaultController::post' => '?',
            'App\\Controller\\DefaultController::postDetail' => '?',
            'App\\Controller\\PostController::delete' => '?',
            'App\\Controller\\PostController::edit' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\PostController::new' => '?',
            'App\\Controller\\PostController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::autocomplete' => '?',
            'App\\Controller\\UserController::batchDelete' => '?',
            'App\\Controller\\UserController::configureActions' => '?',
            'App\\Controller\\UserController::configureAssets' => '?',
            'App\\Controller\\UserController::configureCrud' => '?',
            'App\\Controller\\UserController::configureFilters' => '?',
            'App\\Controller\\UserController::configureResponseParameters' => '?',
            'App\\Controller\\UserController::createEditForm' => '?',
            'App\\Controller\\UserController::createEditFormBuilder' => '?',
            'App\\Controller\\UserController::createIndexQueryBuilder' => '?',
            'App\\Controller\\UserController::createNewForm' => '?',
            'App\\Controller\\UserController::createNewFormBuilder' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::deleteEntity' => '?',
            'App\\Controller\\UserController::detail' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::persistEntity' => '?',
            'App\\Controller\\UserController::register' => '?',
            'App\\Controller\\UserController::renderFilters' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\UserController::updateEntity' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\PostCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\PostCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\PostCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PostCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\PostCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\PostCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PostCrudController:delete' => '?',
            'App\\Controller\\Admin\\PostCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController:detail' => '?',
            'App\\Controller\\Admin\\PostCrudController:edit' => '?',
            'App\\Controller\\Admin\\PostCrudController:index' => '?',
            'App\\Controller\\Admin\\PostCrudController:new' => '?',
            'App\\Controller\\Admin\\PostCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\PostCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\PostCrudController:updateEntity' => '?',
            'App\\Controller\\DefaultController:base' => '?',
            'App\\Controller\\DefaultController:catalogue' => '?',
            'App\\Controller\\DefaultController:post' => '?',
            'App\\Controller\\DefaultController:postDetail' => '?',
            'App\\Controller\\PostController:delete' => '?',
            'App\\Controller\\PostController:edit' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\PostController:new' => '?',
            'App\\Controller\\PostController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:autocomplete' => '?',
            'App\\Controller\\UserController:batchDelete' => '?',
            'App\\Controller\\UserController:configureActions' => '?',
            'App\\Controller\\UserController:configureAssets' => '?',
            'App\\Controller\\UserController:configureCrud' => '?',
            'App\\Controller\\UserController:configureFilters' => '?',
            'App\\Controller\\UserController:configureResponseParameters' => '?',
            'App\\Controller\\UserController:createEditForm' => '?',
            'App\\Controller\\UserController:createEditFormBuilder' => '?',
            'App\\Controller\\UserController:createIndexQueryBuilder' => '?',
            'App\\Controller\\UserController:createNewForm' => '?',
            'App\\Controller\\UserController:createNewFormBuilder' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:deleteEntity' => '?',
            'App\\Controller\\UserController:detail' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:persistEntity' => '?',
            'App\\Controller\\UserController:register' => '?',
            'App\\Controller\\UserController:renderFilters' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\UserController:updateEntity' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}