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
        '/catalogue' => [[['_route' => 'app_catalogue', '_controller' => 'App\\Controller\\CatalogueController::catalogue'], null, null, null, false, false, null]],
        '/creation-posts' => [[['_route' => 'app_creation_posts', '_controller' => 'App\\Controller\\CreationPostsController::index'], null, null, null, false, false, null]],
        '/creation-posts/add' => [[['_route' => 'app_creation_posts_add', '_controller' => 'App\\Controller\\CreationPostsController::add'], null, null, null, false, false, null]],
        '/modification-post/upload' => [[['_route' => 'app_modification_posts_upload', '_controller' => 'App\\Controller\\CreationPostsController::upload'], null, null, null, false, false, null]],
        '/modification-post/delete' => [[['_route' => 'app_modification_post_delete', '_controller' => 'App\\Controller\\CreationPostsController::deleteImage'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/dashboard/ajax' => [[['_route' => 'app_dashboard_ajax', '_controller' => 'App\\Controller\\DashboardController::statistiques'], null, null, null, false, false, null]],
        '/dashboard/category/add' => [[['_route' => 'app_dashboard_add_category', '_controller' => 'App\\Controller\\DashboardController::addCategory'], null, null, null, false, false, null]],
        '/favorite' => [[['_route' => 'app_favorite', '_controller' => 'App\\Controller\\FavoriteController::index'], null, null, null, false, false, null]],
        '/help' => [[['_route' => 'app_help', '_controller' => 'App\\Controller\\HelpController::index'], null, null, null, false, false, null]],
        '/help/add' => [[['_route' => 'app_help_add', '_controller' => 'App\\Controller\\HelpController::addQuestions'], null, null, null, false, false, null]],
        '/base' => [[['_route' => 'app_base', '_controller' => 'App\\Controller\\HomeController::base'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\HomeController::post'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/search' => [
            [['_route' => 'app_post_search', '_controller' => 'App\\Controller\\SearchController::search'], null, null, null, false, false, null],
            [['_route' => 'search_posts', '_controller' => 'App\\Controller\\PostController::search'], null, null, null, false, false, null],
        ],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::monCompte'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/comment/(?'
                    .'|add/([^/]++)(*:66)'
                    .'|response/([^/]++)(*:90)'
                .')'
                .'|/modification\\-posts/([^/]++)(?'
                    .'|(*:130)'
                    .'|/edit(*:143)'
                .')'
                .'|/d(?'
                    .'|elete\\-posts/([^/]++)(*:178)'
                    .'|ashboard/(?'
                        .'|valid\\-post/([^/]++)/([^/]++)(*:227)'
                        .'|role\\-user/([^/]++)/([^/]++)(*:263)'
                        .'|category/(?'
                            .'|edit/([^/]++)(*:296)'
                            .'|delete/([^/]++)(*:319)'
                        .')'
                        .'|help/(?'
                            .'|answer/([^/]++)(*:351)'
                            .'|p(?'
                                .'|rivate/([^/]++)(*:378)'
                                .'|ublic/([^/]++)(*:400)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/post/(?'
                    .'|([^/]++)(?'
                        .'|(*:432)'
                        .'|/edit(*:445)'
                        .'|(*:453)'
                    .')'
                    .'|post/([^/]++)(?'
                        .'|(*:478)'
                    .')'
                    .'|([^/]++)(*:495)'
                .')'
                .'|/user/([^/]++)(*:518)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'app_comment_add', '_controller' => 'App\\Controller\\CommentController::addComment'], ['id'], null, null, false, true, null]],
        90 => [[['_route' => 'app_comment_response', '_controller' => 'App\\Controller\\CommentController::responseComment'], ['id'], null, null, false, true, null]],
        130 => [[['_route' => 'app_modification_posts', '_controller' => 'App\\Controller\\CreationPostsController::modify'], ['id'], null, null, false, true, null]],
        143 => [[['_route' => 'app_modification_posts_edit', '_controller' => 'App\\Controller\\CreationPostsController::edit'], ['id'], null, null, false, false, null]],
        178 => [[['_route' => 'app_delete_posts', '_controller' => 'App\\Controller\\CreationPostsController::delete'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'app_dashboard_valid_ressource', '_controller' => 'App\\Controller\\DashboardController::validRessource'], ['id', 'status'], null, null, false, true, null]],
        263 => [[['_route' => 'app_dashboard_role_user', '_controller' => 'App\\Controller\\DashboardController::roleUser'], ['id', 'role'], null, null, false, true, null]],
        296 => [[['_route' => 'app_dashboard_edit_category', '_controller' => 'App\\Controller\\DashboardController::editCategory'], ['id'], null, null, false, true, null]],
        319 => [[['_route' => 'app_dashboard_delete_category', '_controller' => 'App\\Controller\\DashboardController::deleteCategory'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'app_dashboard_answer_help', '_controller' => 'App\\Controller\\DashboardController::answerHelp'], ['id'], null, null, false, true, null]],
        378 => [[['_route' => 'app_dashboard_private_help', '_controller' => 'App\\Controller\\DashboardController::privateHelp'], ['id'], null, null, false, true, null]],
        400 => [[['_route' => 'app_dashboard_public_help', '_controller' => 'App\\Controller\\DashboardController::publicHelp'], ['id'], null, null, false, true, null]],
        432 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        445 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        478 => [
            [['_route' => 'app_post_actions', '_controller' => 'App\\Controller\\PostController::postActions'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_post_detail', '_controller' => 'App\\Controller\\PostController::postDetail'], ['id'], null, null, false, true, null],
        ],
        495 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        518 => [
            [['_route' => 'app_other_user', '_controller' => 'App\\Controller\\UserController::otherUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
