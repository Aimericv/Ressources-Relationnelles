<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_comment_add' => [['id'], ['_controller' => 'App\\Controller\\CommentController::addComment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment/add']], [], [], []],
    'app_comment_response' => [['id'], ['_controller' => 'App\\Controller\\CommentController::responseComment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment/response']], [], [], []],
    'app_creation_posts' => [[], ['_controller' => 'App\\Controller\\CreationPostsController::index'], [], [['text', '/creation-posts']], [], [], []],
    'app_creation_posts_add' => [[], ['_controller' => 'App\\Controller\\CreationPostsController::add'], [], [['text', '/creation-posts/add']], [], [], []],
    'app_modification_posts' => [['id'], ['_controller' => 'App\\Controller\\CreationPostsController::modify'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modification-posts']], [], [], []],
    'app_modification_posts_edit' => [['id'], ['_controller' => 'App\\Controller\\CreationPostsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/modification-posts']], [], [], []],
    'app_modification_posts_upload' => [[], ['_controller' => 'App\\Controller\\CreationPostsController::upload'], [], [['text', '/modification-post/upload']], [], [], []],
    'app_modification_post_delete' => [[], ['_controller' => 'App\\Controller\\CreationPostsController::deleteImage'], [], [['text', '/modification-post/delete']], [], [], []],
    'app_delete_posts' => [['id'], ['_controller' => 'App\\Controller\\CreationPostsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete-posts']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'app_dashboard_ajax' => [[], ['_controller' => 'App\\Controller\\DashboardController::statistiques'], [], [['text', '/dashboard/ajax']], [], [], []],
    'app_dashboard_valid_ressource' => [['id', 'status'], ['_controller' => 'App\\Controller\\DashboardController::validRessource'], [], [['variable', '/', '[^/]++', 'status', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/valid-post']], [], [], []],
    'app_dashboard_role_user' => [['id', 'role'], ['_controller' => 'App\\Controller\\DashboardController::roleUser'], [], [['variable', '/', '[^/]++', 'role', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/role-user']], [], [], []],
    'app_dashboard_edit_category' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::editCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/category/edit']], [], [], []],
    'app_dashboard_add_category' => [[], ['_controller' => 'App\\Controller\\DashboardController::addCategory'], [], [['text', '/dashboard/category/add']], [], [], []],
    'app_dashboard_delete_category' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::deleteCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/category/delete']], [], [], []],
    'app_dashboard_answer_help' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::answerHelp'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/help/answer']], [], [], []],
    'app_dashboard_private_help' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::privateHelp'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/help/private']], [], [], []],
    'app_dashboard_public_help' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::publicHelp'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/help/public']], [], [], []],
    'app_default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/default']], [], [], []],
    'app_base' => [[], ['_controller' => 'App\\Controller\\DefaultController::base'], [], [['text', '/base']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::post'], [], [['text', '/']], [], [], []],
    'app_catalogue' => [[], ['_controller' => 'App\\Controller\\DefaultController::catalogue'], [], [['text', '/catalogue']], [], [], []],
    'app_post_like' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::postLike'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_detail' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::postDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_favorite' => [[], ['_controller' => 'App\\Controller\\FavoriteController::index'], [], [['text', '/favorite']], [], [], []],
    'app_help' => [[], ['_controller' => 'App\\Controller\\HelpController::index'], [], [['text', '/help']], [], [], []],
    'app_help_add' => [[], ['_controller' => 'App\\Controller\\HelpController::addQuestions'], [], [['text', '/help/add']], [], [], []],
    'app_post_index' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/post/']], [], [], []],
    'app_post_new' => [[], ['_controller' => 'App\\Controller\\PostController::new'], [], [['text', '/post/new']], [], [], []],
    'app_post_show' => [['id'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_edit' => [['id'], ['_controller' => 'App\\Controller\\PostController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_post_search' => [[], ['_controller' => 'App\\Controller\\SearchController::search'], [], [['text', '/search']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::monCompte'], [], [['text', '/user']], [], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'search_posts' => [[], ['_controller' => 'App\\Controller\\PostController::search'], [], [['text', '/search']], [], [], []],
    'post_show' => [['id'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
];
