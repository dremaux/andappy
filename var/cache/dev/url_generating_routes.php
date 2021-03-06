<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'admin.agence.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminAgenceController::index'], [], [['text', '/admin/agence/']], [], []],
    'admin.agence.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminAgenceController::new'], [], [['text', '/admin/agence/new']], [], []],
    'admin.agence.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminAgenceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/agence']], [], []],
    'admin.agence.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminAgenceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/agenceadmin/agence/delete']], [], []],
    'admin.option.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], [], [['text', '/admin/option/']], [], []],
    'admin.option.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], [], [['text', '/admin/option/new']], [], []],
    'admin.option.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/option']], [], []],
    'admin.option.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/optionadmin/option/delete']], [], []],
    'admin.property.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], [], [['text', '/admin']], [], []],
    'admin.property.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::new'], [], [['text', '/admin/property/create']], [], []],
    'admin.property.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/property/edit']], [], []],
    'admin.property.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/property/delete']], [], []],
    'property.index' => [[], ['_controller' => 'App\\Controller\\PropertyController::index'], [], [['text', '/biens']], [], []],
    'property.show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\PropertyController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/biens']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
