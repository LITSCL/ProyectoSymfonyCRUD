<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'tarea_vista_tareas' => [[], ['_controller' => 'App\\Controller\\TareaController::tareas'], [], [['text', '/']], [], [], []],
    'tarea_vista_crear' => [[], ['_controller' => 'App\\Controller\\TareaController::crear'], [], [['text', '/tarea-crear']], [], [], []],
    'tarea_vista_detalle' => [['id'], ['_controller' => 'App\\Controller\\TareaController::detalle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tarea']], [], [], []],
    'tarea_vista_misTareas' => [[], ['_controller' => 'App\\Controller\\TareaController::misTareas'], [], [['text', '/mis-tareas']], [], [], []],
    'tarea_vista_editar' => [['id'], ['_controller' => 'App\\Controller\\TareaController::editar'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tarea-editar']], [], [], []],
    'tarea_accion_save' => [[], ['_controller' => 'App\\Controller\\TareaController::save'], [], [['text', '/tarea-guardar']], [], [], []],
    'tarea_accion_update' => [[], ['_controller' => 'App\\Controller\\TareaController::update'], [], [['text', '/tarea-actualizar']], [], [], []],
    'tarea_accion_delete' => [['id'], ['_controller' => 'App\\Controller\\TareaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tarea-borrar']], [], [], []],
    'usuario_vista_registro' => [[], ['_controller' => 'App\\Controller\\UsuarioController::registro'], [], [['text', '/registro']], [], [], []],
    'usuario_vista_iniciarSesion' => [[], ['_controller' => 'App\\Controller\\UsuarioController::iniciarSesion'], [], [['text', '/iniciar-sesion']], [], [], []],
    'usuario_accion_autenticarSesion' => [[], ['_controller' => 'App\\Controller\\UsuarioController::autenticarSesion'], [], [['text', '/autenticar-sesion']], [], [], []],
    'usuario_accion_errorSesion' => [[], ['_controller' => 'App\\Controller\\UsuarioController::errorSesion'], [], [['text', '/error-sesion']], [], [], []],
    'usuario_accion_cerrarSesion' => [[], [], [], [['text', '/cerrar-sesion']], [], [], []],
    'usuario_accion_save' => [[], ['_controller' => 'App\\Controller\\UsuarioController::save'], [], [['text', '/usuario-guardar']], [], [], []],
];