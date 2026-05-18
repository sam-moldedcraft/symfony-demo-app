<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [[['_route' => '_logout_main'], null, null, null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/(ar|bg|bn|bs|ca|cs|de|en|es|eu|fr|hr|id|it|ja|lt|ne|nl|pl|pt_BR|ro|ru|sl|sq|sr_Cyrl|sr_Latn|tr|uk|vi|zh_CN)/_components/([^/]++)(?:/([^/]++))?(*:185)'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:210)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:252)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:289)'
                                .'|router(*:303)'
                                .'|exception(?'
                                    .'|(*:323)'
                                    .'|\\.css(*:336)'
                                .')'
                            .')'
                            .'|(*:346)'
                        .')'
                    .')'
                .')'
                .'|/(ar|bg|bn|bs|ca|cs|de|en|es|eu|fr|hr|id|it|ja|lt|ne|nl|pl|pt_BR|ro|ru|sl|sq|sr_Cyrl|sr_Latn|tr|uk|vi|zh_CN)?(*:466)'
                .'|/(ar|bg|bn|bs|ca|cs|de|en|es|eu|fr|hr|id|it|ja|lt|ne|nl|pl|pt_BR|ro|ru|sl|sq|sr_Cyrl|sr_Latn|tr|uk|vi|zh_CN)/(?'
                    .'|admin/post(?'
                        .'|(*:599)'
                        .'|/(?'
                            .'|new(*:614)'
                            .'|([1-9][0-9]*)(*:635)'
                            .'|([1-9][0-9]*)/edit(*:661)'
                            .'|([1-9][0-9]*)/delete(*:689)'
                        .')'
                    .')'
                    .'|blog(?'
                        .'|(*:706)'
                        .'|/(?'
                            .'|rss\\.xml(*:726)'
                            .'|p(?'
                                .'|age/([1-9][0-9]*)(*:755)'
                                .'|osts/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)(*:800)'
                            .')'
                            .'|comment/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)/new(*:853)'
                            .'|search(*:867)'
                        .')'
                    .')'
                    .'|login(*:882)'
                    .'|profile/(?'
                        .'|edit(*:905)'
                        .'|change\\-password(*:929)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        185 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_locale', '_live_component', '_live_action'], null, null, false, true, null]],
        210 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        252 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        289 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        303 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        323 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        336 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        346 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        466 => [[['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null]],
        599 => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_post_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
        ],
        614 => [[['_route' => 'admin_post_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        635 => [[['_route' => 'admin_post_show', '_route_mapping' => ['id' => 'post'], '_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        661 => [[['_route' => 'admin_post_edit', '_route_mapping' => ['id' => 'post'], '_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        689 => [[['_route' => 'admin_post_delete', '_route_mapping' => ['id' => 'post'], '_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        706 => [[['_route' => 'blog_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        726 => [[['_route' => 'blog_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        755 => [[['_route' => 'blog_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        800 => [[['_route' => 'blog_post', '_route_mapping' => ['slug' => 'post'], '_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        853 => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'], ['_locale', 'postSlug'], ['POST' => 0], null, false, false, null]],
        867 => [[['_route' => 'blog_search', '_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        882 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        905 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        929 => [
            [['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
