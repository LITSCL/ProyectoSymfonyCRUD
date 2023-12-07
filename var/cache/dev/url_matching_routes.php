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
        '/' => [[['_route' => 'tarea_vista_tareas', '_controller' => 'App\\Controller\\TareaController::tareas'], null, null, null, false, false, null]],
        '/tarea-crear' => [[['_route' => 'tarea_vista_crear', '_controller' => 'App\\Controller\\TareaController::crear'], null, null, null, false, false, null]],
        '/mis-tareas' => [[['_route' => 'tarea_vista_misTareas', '_controller' => 'App\\Controller\\TareaController::misTareas'], null, null, null, false, false, null]],
        '/tarea-guardar' => [[['_route' => 'tarea_accion_save', '_controller' => 'App\\Controller\\TareaController::save'], null, null, null, false, false, null]],
        '/tarea-actualizar' => [[['_route' => 'tarea_accion_update', '_controller' => 'App\\Controller\\TareaController::update'], null, null, null, false, false, null]],
        '/registro' => [[['_route' => 'usuario_vista_registro', '_controller' => 'App\\Controller\\UsuarioController::registro'], null, null, null, false, false, null]],
        '/iniciar-sesion' => [[['_route' => 'usuario_vista_iniciarSesion', '_controller' => 'App\\Controller\\UsuarioController::iniciarSesion'], null, null, null, false, false, null]],
        '/autenticar-sesion' => [[['_route' => 'usuario_accion_autenticarSesion', '_controller' => 'App\\Controller\\UsuarioController::autenticarSesion'], null, null, null, false, false, null]],
        '/error-sesion' => [[['_route' => 'usuario_accion_errorSesion', '_controller' => 'App\\Controller\\UsuarioController::errorSesion'], null, null, null, false, false, null]],
        '/cerrar-sesion' => [[['_route' => 'usuario_accion_cerrarSesion'], null, null, null, false, false, null]],
        '/usuario-guardar' => [[['_route' => 'usuario_accion_save', '_controller' => 'App\\Controller\\UsuarioController::save'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/tarea(?'
                    .'|/([^/]++)(*:187)'
                    .'|\\-(?'
                        .'|editar/([^/]++)(*:215)'
                        .'|borrar/([^/]++)(*:238)'
                    .')'
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
        187 => [[['_route' => 'tarea_vista_detalle', '_controller' => 'App\\Controller\\TareaController::detalle'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'tarea_vista_editar', '_controller' => 'App\\Controller\\TareaController::editar'], ['id'], null, null, false, true, null]],
        238 => [
            [['_route' => 'tarea_accion_delete', '_controller' => 'App\\Controller\\TareaController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
