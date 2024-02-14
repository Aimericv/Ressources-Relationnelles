<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/creation-posts' => [[['_route' => 'app_creation_posts', '_controller' => 'App\\Controller\\CreationPostsController::index'], null, null, null, false, false, null]],
        '/creation-posts/add' => [[['_route' => 'app_creation_posts_add', '_controller' => 'App\\Controller\\CreationPostsController::add'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/default' => [[['_route' => 'app_default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/base' => [[['_route' => 'app_base', '_controller' => 'App\\Controller\\DefaultController::base'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\DefaultController::post'], null, null, null, false, false, null]],
        '/catalogue' => [[['_route' => 'app_catalogue', '_controller' => 'App\\Controller\\DefaultController::catalogue'], null, null, null, false, false, null]],
        '/favorite' => [[['_route' => 'app_favorite', '_controller' => 'App\\Controller\\FavoriteController::index'], null, null, null, false, false, null]],
        '/help' => [[['_route' => 'app_help', '_controller' => 'App\\Controller\\HelpController::index'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::monCompte'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/modification\\-posts/([^/]++)(*:71)'
                .'|/suppression\\-posts/([^/]++)(*:106)'
                .'|/post/(?'
                    .'|([^/]++)(*:131)'
                    .'|new(*:142)'
                    .'|([^/]++)(?'
                        .'|(*:161)'
                        .'|/edit(*:174)'
                        .'|(*:182)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [[['_route' => 'app_modification_posts', '_controller' => 'App\\Controller\\CreationPostsController::modify'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'app_suppression_posts', '_controller' => 'App\\Controller\\CreationPostsController::delete'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'app_post_detail', '_controller' => 'App\\Controller\\DefaultController::postDetail'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        161 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        174 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        182 => [
            [['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
