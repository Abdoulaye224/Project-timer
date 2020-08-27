<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\AuthentificatorController::login'], [], [['text', '/login']], [], []],
    'login-success' => [[], ['_controller' => 'App\\Controller\\AuthentificatorController::connectSuccess'], [], [['text', '/login-success']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\AuthentificatorController::logout'], [], [['text', '/logout']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\HomeController::profileAction'], [], [['text', '/profile']], [], []],
    'project' => [[], ['_controller' => 'App\\Controller\\ProjectController::index'], [], [['text', '/project']], [], []],
    'project-create' => [[], ['_controller' => 'App\\Controller\\ProjectController::newAction'], [], [['text', '/project_create']], [], []],
    'project_edit' => [['idProject'], ['_controller' => 'App\\Controller\\ProjectController::editAction'], [], [['variable', '/', '[^/]++', 'idProject', true], ['text', '/project_edit']], [], []],
    'team' => [[], ['_controller' => 'App\\Controller\\TeamController::index'], [], [['text', '/team']], [], []],
    'team-create' => [[], ['_controller' => 'App\\Controller\\TeamController::newAction'], [], [['text', '/team_create']], [], []],
    'team_edit' => [['idTeam'], ['_controller' => 'App\\Controller\\TeamController::editAction'], [], [['variable', '/', '[^/]++', 'idTeam', true], ['text', '/team_edit']], [], []],
    'timer' => [['idTeam', 'idProject'], ['_controller' => 'App\\Controller\\TimerController::index'], [], [['variable', '/', '[^/]++', 'idProject', true], ['variable', '/', '[^/]++', 'idTeam', true], ['text', '/timer']], [], []],
    'timer-start' => [['idTeam', 'idProject'], ['_controller' => 'App\\Controller\\TimerController::startTimer'], [], [['variable', '/', '[^/]++', 'idProject', true], ['variable', '/', '[^/]++', 'idTeam', true], ['text', '/timer_start']], [], []],
    'timer_stop' => [[], ['_controller' => 'App\\Controller\\TimerController::stopTimer'], [], [['text', '/timer_stop']], [], []],
    'timer-team' => [[], ['_controller' => 'App\\Controller\\TimerController::listTeam'], [], [['text', '/timer_team']], [], []],
    'timer-group' => [['idTeam'], ['_controller' => 'App\\Controller\\TimerController::listGroup'], [], [['variable', '/', '[^/]++', 'idTeam', true], ['text', '/timer_group']], [], []],
    'user_list' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user_list']], [], []],
    'user_create' => [[], ['_controller' => 'App\\Controller\\UserController::newAction'], [], [['text', '/user_create']], [], []],
    'user_delete_bis' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteBis'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete-bis']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteUser']], [], []],
];
