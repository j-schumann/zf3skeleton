<?php

/**
 * Global Configuration Override.
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
// <editor-fold defaultstate="collapsed" desc="asset_manager">
    'asset_manager' => [
        'resolver_configs' => [
            'collections' => [
                'css/combined.css' => [
                    'cookiebar/jquery.cookiebar.css',
                    'css/base.css',
                ],
                'js/combined.js' => [
                    'cookiebar/jquery.cookiebar.js',
                    'vrok-lib/vrok-lib.js',
                    'app-base.js',
                    'js/_module-name_.js',
                ],
            ],
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="bjyauthorize">
    'bjyauthorize' => [
        // Add guards here for other modules that don't use BjyAuthorize
        // themself as they would deny access by default without a guard
        'guards' => [
            'BjyAuthorize\Guard\Controller' => [
                [
                    'controller' => 'AssetManager\Controller\Console' ,
                    'roles'      => ['guest', 'user'],
                ],
            ],
        ],
    ],
// </editor-fold>
];
