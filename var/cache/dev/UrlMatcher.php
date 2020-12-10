<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/visiteur' => [[['_route' => 'visiteur', '_controller' => 'App\\Controller\\VisiteurController::index'], null, null, null, false, false, null]],
        '/visiteur/menu' => [[['_route' => 'menuVisiteur', '_controller' => 'App\\Controller\\VisiteurController::menu'], null, null, null, false, false, null]],
        '/visiteur/menu/donnerDate' => [[['_route' => 'donnerDate', '_controller' => 'App\\Controller\\VisiteurController::donnerDate'], null, null, null, false, false, null]],
        '/visiteur/menu/renseigner' => [[['_route' => 'renseigner', '_controller' => 'App\\Controller\\VisiteurController::renseigner'], null, null, null, false, false, null]],
        '/visiteur/menu/suivreFiche' => [[['_route' => 'suivreFiche', '_controller' => 'App\\Controller\\VisiteurController::suivreFiche'], null, null, null, false, false, null]],
        '/comptable' => [[['_route' => 'comptable', '_controller' => 'App\\Controller\\ComptableController::index'], null, null, null, false, false, null]],
        '/comptable/menu' => [[['_route' => 'menuComptable', '_controller' => 'App\\Controller\\ComptableController::menu'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
