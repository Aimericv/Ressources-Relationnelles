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
        '/modification-post/upload' => [[['_route' => 'app_modification_posts_upload', '_controller' => 'App\\Controller\\CreationPostsController::upload'], null, null, null, false, false, null]],
        '/modification-post/delete' => [[['_route' => 'app_modification_post_delete', '_controller' => 'App\\Controller\\CreationPostsController::deleteImage'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/dashboard/ajax' => [[['_route' => 'app_dashboard_ajax', '_controller' => 'App\\Controller\\DashboardController::statistiques'], null, null, null, false, false, null]],
        '/default' => [[['_route' => 'app_default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/base' => [[['_route' => 'app_base', '_controller' => 'App\\Controller\\DefaultController::base'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\DefaultController::post'], null, null, null, false, false, null]],
        '/catalogue' => [[['_route' => 'app_catalogue', '_controller' => 'App\\Controller\\DefaultController::catalogue'], null, null, null, false, false, null]],
        '/favorite' => [[['_route' => 'app_favorite', '_controller' => 'App\\Controller\\FavoriteController::index'], null, null, null, false, false, null]],
        '/help' => [[['_route' => 'app_help', '_controller' => 'App\\Controller\\HelpController::index'], null, null, null, false, false, null]],
        '/help/add' => [[['_route' => 'app_help_add', '_controller' => 'App\\Controller\\HelpController::addQuestions'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::monCompte'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/modification\\-posts/([^/]++)(?'
                    .'|(*:74)'
                    .'|/edit(*:86)'
                .')'
                .'|/delete\\-posts/([^/]++)(*:117)'
                .'|/post/(?'
                    .'|([^/]++)(*:142)'
                    .'|new(*:153)'
                    .'|([^/]++)(?'
                        .'|(*:172)'
                        .'|/edit(*:185)'
                        .'|(*:193)'
                    .')'
                .')'
                .'|/like/(\\d+)(*:214)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'app_modification_posts', '_controller' => 'App\\Controller\\CreationPostsController::modify'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'app_modification_posts_edit', '_controller' => 'App\\Controller\\CreationPostsController::edit'], ['id'], null, null, false, false, null]],
        117 => [[['_route' => 'app_delete_posts', '_controller' => 'App\\Controller\\CreationPostsController::delete'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'app_post_detail', '_controller' => 'App\\Controller\\DefaultController::postDetail'], ['id'], null, null, false, true, null]],
        153 => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        172 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        214 => [
            [['_route' => 'app_like', '_controller' => 'App\\Controller\\LikeController::likeAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
