<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthentificatorController::login'], null, null, null, false, false, null]],
        '/login-success' => [[['_route' => 'login-success', '_controller' => 'App\\Controller\\AuthentificatorController::connectSuccess'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthentificatorController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\HomeController::profileAction'], null, null, null, false, false, null]],
        '/project' => [[['_route' => 'project', '_controller' => 'App\\Controller\\ProjectController::index'], null, null, null, false, false, null]],
        '/project_create' => [[['_route' => 'project-create', '_controller' => 'App\\Controller\\ProjectController::newAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team', '_controller' => 'App\\Controller\\TeamController::index'], null, null, null, false, false, null]],
        '/team_create' => [[['_route' => 'team-create', '_controller' => 'App\\Controller\\TeamController::newAction'], null, null, null, false, false, null]],
        '/timer_stop' => [[['_route' => 'timer_stop', '_controller' => 'App\\Controller\\TimerController::stopTimer'], null, null, null, false, false, null]],
        '/timer_team' => [[['_route' => 'timer-team', '_controller' => 'App\\Controller\\TimerController::listTeam'], null, null, null, false, false, null]],
        '/user_list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user_create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\UserController::newAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/project_edit/([^/]++)(*:191)'
                .'|/t(?'
                    .'|eam_edit/([^/]++)(*:221)'
                    .'|imer(?'
                        .'|/([^/]++)/([^/]++)(*:254)'
                        .'|_(?'
                            .'|start/([^/]++)/([^/]++)(*:289)'
                            .'|group/([^/]++)(*:311)'
                        .')'
                    .')'
                .')'
                .'|/delete(?'
                    .'|\\-bis/([^/]++)(*:346)'
                    .'|User/([^/]++)(*:367)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::editAction'], ['idProject'], null, null, false, true, null]],
        221 => [[['_route' => 'team_edit', '_controller' => 'App\\Controller\\TeamController::editAction'], ['idTeam'], null, null, false, true, null]],
        254 => [[['_route' => 'timer', '_controller' => 'App\\Controller\\TimerController::index'], ['idTeam', 'idProject'], null, null, false, true, null]],
        289 => [[['_route' => 'timer-start', '_controller' => 'App\\Controller\\TimerController::startTimer'], ['idTeam', 'idProject'], null, null, false, true, null]],
        311 => [[['_route' => 'timer-group', '_controller' => 'App\\Controller\\TimerController::listGroup'], ['idTeam'], null, null, false, true, null]],
        346 => [[['_route' => 'user_delete_bis', '_controller' => 'App\\Controller\\UserController::deleteBis'], ['id'], null, null, false, true, null]],
        367 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
