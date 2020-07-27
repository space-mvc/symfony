<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/api/(?'
                    .'|p(?'
                        .'|ublishers/([^/]++)(?'
                            .'|(*:40)'
                        .')'
                        .'|laceholders/([^/]++)(?'
                            .'|(*:71)'
                        .')'
                    .')'
                    .'|websites/([^/]++)(?'
                        .'|(*:100)'
                    .')'
                    .'|advertisers/([^/]++)(?'
                        .'|(*:132)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [
            [['_route' => 'get_publisher', '_controller' => 'App\\Controller\\PublisherController::getPublisher'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_publisher', '_controller' => 'App\\Controller\\PublisherController::updatePublisher'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_publisher', '_controller' => 'App\\Controller\\PublisherController::deletePublisher'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        71 => [
            [['_route' => 'get_placeholder', '_controller' => 'App\\Controller\\PlaceholderController::getPlaceholder'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_placecholder', '_controller' => 'App\\Controller\\PlaceholderController::updatePlaceholder'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_placeholder', '_controller' => 'App\\Controller\\PlaceholderController::deletePlaceholder'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        100 => [
            [['_route' => 'get_website', '_controller' => 'App\\Controller\\WebsiteController::getWebsite'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_website', '_controller' => 'App\\Controller\\WebsiteController::updateWebsite'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_website', '_controller' => 'App\\Controller\\WebsiteController::deleteWebsite'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        132 => [
            [['_route' => 'get_advertiser', '_controller' => 'App\\Controller\\AdvertiserController::getAdvertiser'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_advertiser', '_controller' => 'App\\Controller\\AdvertiserController::updateAdvertiser'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_advertiser', '_controller' => 'App\\Controller\\AdvertiserController::deleteAdvertiser'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
