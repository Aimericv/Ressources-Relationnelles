<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_creation_posts' => [[], ['_controller' => 'App\\Controller\\CreationPostsController::index'], [], [['text', '/creation-posts']], [], [], []],
    'app_creation_posts_add' => [[], ['_controller' => 'App\\Controller\\CreationPostsController::add'], [], [['text', '/creation-posts/add']], [], [], []],
    'app_modification_posts' => [['id'], ['_controller' => 'App\\Controller\\CreationPostsController::modify'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modification-posts']], [], [], []],
    'app_suppression_posts' => [['id'], ['_controller' => 'App\\Controller\\CreationPostsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/suppression-posts']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'app_default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/default']], [], [], []],
    'app_base' => [[], ['_controller' => 'App\\Controller\\DefaultController::base'], [], [['text', '/base']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::post'], [], [['text', '/']], [], [], []],
    'app_catalogue' => [[], ['_controller' => 'App\\Controller\\DefaultController::catalogue'], [], [['text', '/catalogue']], [], [], []],
    'app_post_detail' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::postDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_favorite' => [[], ['_controller' => 'App\\Controller\\FavoriteController::index'], [], [['text', '/favorite']], [], [], []],
    'app_help' => [[], ['_controller' => 'App\\Controller\\HelpController::index'], [], [['text', '/help']], [], [], []],
    'app_post_index' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/post/']], [], [], []],
    'app_post_new' => [[], ['_controller' => 'App\\Controller\\PostController::new'], [], [['text', '/post/new']], [], [], []],
    'app_post_show' => [['id'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_edit' => [['id'], ['_controller' => 'App\\Controller\\PostController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::monCompte'], [], [['text', '/user']], [], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
];
