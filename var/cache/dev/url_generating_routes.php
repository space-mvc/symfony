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
    'get_users' => [[], ['_controller' => 'App\\Controller\\UserController::getUsers'], [], [['text', '/api/users']], [], []],
    'get_publishers' => [[], ['_controller' => 'App\\Controller\\PublisherController::getPublishers'], [], [['text', '/api/publishers']], [], []],
    'get_publisher' => [['id'], ['_controller' => 'App\\Controller\\PublisherController::getPublisher'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/publishers']], [], []],
    'create_publisher' => [[], ['_controller' => 'App\\Controller\\PublisherController::createPublisher'], [], [['text', '/api/publishers']], [], []],
    'update_publisher' => [['id'], ['_controller' => 'App\\Controller\\PublisherController::updatePublisher'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/publishers']], [], []],
    'delete_publisher' => [['id'], ['_controller' => 'App\\Controller\\PublisherController::deletePublisher'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/publishers']], [], []],
    'get_websites' => [[], ['_controller' => 'App\\Controller\\WebsiteController::getWebsites'], [], [['text', '/api/websites']], [], []],
    'get_website' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::getWebsite'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/websites']], [], []],
    'create_website' => [[], ['_controller' => 'App\\Controller\\WebsiteController::createWebsite'], [], [['text', '/api/websites']], [], []],
    'update_website' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::updateWebsite'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/websites']], [], []],
    'delete_website' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::deleteWebsite'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/websites']], [], []],
    'get_placeholders' => [[], ['_controller' => 'App\\Controller\\PlaceholderController::getPlaceholders'], [], [['text', '/api/placeholders']], [], []],
    'get_placeholder' => [['id'], ['_controller' => 'App\\Controller\\PlaceholderController::getPlaceholder'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/placeholders']], [], []],
    'create_placeholder' => [[], ['_controller' => 'App\\Controller\\PlaceholderController::createPlaceholder'], [], [['text', '/api/placeholders']], [], []],
    'update_placecholder' => [['id'], ['_controller' => 'App\\Controller\\PlaceholderController::updatePlaceholder'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/placeholders']], [], []],
    'delete_placeholder' => [['id'], ['_controller' => 'App\\Controller\\PlaceholderController::deletePlaceholder'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/placeholders']], [], []],
    'get_advertisers' => [[], ['_controller' => 'App\\Controller\\AdvertiserController::getAdvertisers'], [], [['text', '/api/advertisers']], [], []],
    'get_advertiser' => [['id'], ['_controller' => 'App\\Controller\\AdvertiserController::getAdvertiser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/advertisers']], [], []],
    'create_advertiser' => [[], ['_controller' => 'App\\Controller\\AdvertiserController::createAdvertiser'], [], [['text', '/api/advertisers']], [], []],
    'update_advertiser' => [['id'], ['_controller' => 'App\\Controller\\AdvertiserController::updateAdvertiser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/advertisers']], [], []],
    'delete_advertiser' => [['id'], ['_controller' => 'App\\Controller\\AdvertiserController::deleteAdvertiser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/advertisers']], [], []],
];
