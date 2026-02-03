<?php

return [
    'name' => 'My Plugin',
    'description' => 'Simple Mautic plugin with admin form',
    'version' => '1.0.0',
    'author' => 'pooria',

    'routes' => [
        'main' => [
            'myplugin_config' => [
                'path' => '/myplugin/config',
                'controller' => 'MauticPlugin\MyPluginBundle\Controller\ConfigController::indexAction'
            ],
            ],
            ],

    'menu' => [
        'admin' => [
                'items' => [
                    'myplugin.settings' => [
                    'label' => 'My Plugin Settings',
                    'route' => 'myplugin_config',
                    'parent' => 'mautic.core.settings',
                    'access' => 'plugin:myplugin:settings',
                    ]
                ]
            ]
                    ],

    'permissions' => [
        'plugin:myplugin' => [
            'settings' => [
                'label' => 'My Plugin Settings'
            ]
        ]
    ]
];
