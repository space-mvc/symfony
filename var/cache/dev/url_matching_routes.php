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
        '/api/users' => [[['_route' => 'get_users', '_controller' => 'App\\Controller\\UserController::getUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/publishers' => [
            [['_route' => 'get_publishers', '_controller' => 'App\\Controller\\PublisherController::getPublishers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_publisher', '_controller' => 'App\\Controller\\PublisherController::createPublisher'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/websites' => [
            [['_route' => 'get_websites', '_controller' => 'App\\Controller\\WebsiteController::getWebsites'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_website', '_controller' => 'App\\Controller\\WebsiteController::createWebsite'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/placeholders' => [
            [['_route' => 'get_placeholders', '_controller' => 'App\\Controller\\PlaceholderController::getPlaceholders'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_placeholder', '_controller' => 'App\\Controller\\PlaceholderController::createPlaceholder'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/advertisers' => [
            [['_route' => 'get_advertisers', '_controller' => 'App\\Controller\\AdvertiserController::getAdvertisers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_advertiser', '_controller' => 'App\\Controller\\AdvertiserController::createAdvertiser'], null, ['POST' => 0], null, false, false, null],
        ],
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
                .'|/api/(?'
                    .'|p(?'
                        .'|ublishers/([^/]++)(?'
                            .'|(*:202)'
                        .')'
                        .'|laceholders/([^/]++)(?'
                            .'|(*:234)'
                        .')'
                    .')'
                    .'|websites/([^/]++)(?'
                        .'|(*:264)'
                    .')'
                    .'|advertisers/([^/]++)(?'
                        .'|(*:296)'
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
        202 => [
            [['_route' => 'get_publisher', '_controller' => 'App\\Controller\\PublisherController::getPublisher'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_publisher', '_controller' => 'App\\Controller\\PublisherController::updatePublisher'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_publisher', '_controller' => 'App\\Controller\\PublisherController::deletePublisher'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        234 => [
            [['_route' => 'get_placeholder', '_controller' => 'App\\Controller\\PlaceholderController::getPlaceholder'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_placecholder', '_controller' => 'App\\Controller\\PlaceholderController::updatePlaceholder'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_placeholder', '_controller' => 'App\\Controller\\PlaceholderController::deletePlaceholder'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        264 => [
            [['_route' => 'get_website', '_controller' => 'App\\Controller\\WebsiteController::getWebsite'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_website', '_controller' => 'App\\Controller\\WebsiteController::updateWebsite'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_website', '_controller' => 'App\\Controller\\WebsiteController::deleteWebsite'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        296 => [
            [['_route' => 'get_advertiser', '_controller' => 'App\\Controller\\AdvertiserController::getAdvertiser'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_advertiser', '_controller' => 'App\\Controller\\AdvertiserController::updateAdvertiser'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_advertiser', '_controller' => 'App\\Controller\\AdvertiserController::deleteAdvertiser'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
