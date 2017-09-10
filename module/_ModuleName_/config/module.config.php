<?php

/**
 * _ModuleName_ config.
 */
return [
// <editor-fold defaultstate="collapsed" desc="asset_manager">
    'asset_manager' => [
        'resolver_configs' => [
            'paths' => [
                __DIR__.'/../public',
            ],
            'map' => [
                'css/base.css'  => 'public/css/base.css',
                'js/_module-name_.js' => 'public/js/_module-name_.js',
            ],
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="bjyauthorize">
    'bjyauthorize' => [
        'guards' => [
            // all controllers need a guard or access is denied by default
            'BjyAuthorize\Guard\Controller' => [
                [
                    'controller' => '_ModuleName_\Controller\Account',
                    'action'     => ['index'],
                    'roles'      => ['guest', 'user'],
                ],
                [
                    'controller' => 'Inso\Controller\Account',
                    'action'     => ['settings'],
                    'roles'      => ['user'],
                ],
                [
                    'controller' => '_ModuleName_\Controller\Index',
                    'roles'      => ['guest', 'user'],
                ],
            ],
        ],
        'resource_providers' => [
            'BjyAuthorize\Provider\Resource\Config' => [
                //'_ModuleName_\Entity\Order'   => [],
            ],
        ],
        'rule_providers' => [
            'BjyAuthorize\Provider\Rule\Config' => [
                'allow' => [
                    //['admin', '_ModuleName_\Entity\Vendor'],
                    //['user', '_ModuleName_\Entity\Order', null,
                    //    '_ModuleName_\Acl\Assertion\OrderAssertion', ],
                ],
            ],
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="console">
    'console' => [
        'router' => [
            'routes' => [
            ],
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="doctrine">
    'doctrine' => [
        'driver' => [
            '_modulename__entities' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'zend_storage',
                'paths' => [__DIR__.'/../src/Entity'],
            ],
            'orm_default' => [
                'drivers' => [
                    '_ModuleName_\Entity' => '_modulename__entities',
                ],
            ],
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="email_service">
    'email_service' => [
        //'layout' => '_module-name_/partials/mail/layout',
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="listeners">
    'listeners' => [

    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="navigation">
    'navigation' => [
        'default' => [
            /*'account' => [
                'label' => 'navigation.account',
                'uri'   => '#', // we need either a route or an URI to avoid fatal error
                'order' => -99,
                'pages' => [
                    'account/logout' => null,
                    [
                        'label'    => 'navigation.account.register',
                        'route'    => 'register',
                        'resource' => 'guest',
                    ],
                ],
            ],*/
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="router">
    'router' => [
        'routes' => [
            'home' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => '_ModuleName_\Controller\Index',
                        'action'     => 'index',
                    ],
                ],
            ],
            'imprint' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/imprint/',
                    'defaults' => [
                        'controller' => '_ModuleName_\Controller\Index',
                        'action'     => 'imprint',
                    ],
                ],
            ],
            'privacy' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/privacy/',
                    'defaults' => [
                        'controller' => '_ModuleName_\Controller\Index',
                        'action'     => 'privacy',
                    ],
                ],
            ],
            'account' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/account/',
                    'defaults' => [
                        'controller' => '_ModuleName_\Controller\Account',
                        'action'     => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes'  => [
                    'login' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => 'login[/]',
                            'defaults' => [
                                'controller' => 'AppBase\Controller\Account',
                                'action'     => 'login',
                            ],
                        ],
                    ],
                    'logout' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => 'logout[/]',
                            'defaults' => [
                                'controller' => 'AppBase\Controller\Account',
                                'action'     => 'logout',
                            ],
                        ],
                    ],
                    'change-password' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => 'change-password[/]',
                            'defaults' => [
                                'controller' => 'AppBase\Controller\Account',
                                'action'     => 'change-password',
                            ],
                        ],
                    ],
                    'change-displayname' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => 'change-displayname[/]',
                            'defaults' => [
                                'controller' => 'AppBase\Controller\Account',
                                'action'     => 'change-displayname',
                            ],
                        ],
                    ],
                    'request-password' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => 'request-password[/]',
                            'defaults' => [
                                'controller' => 'AppBase\Controller\Account',
                                'action'     => 'request-password',
                            ],
                        ],
                    ],
                    'reset-password' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => 'reset-password[/]',
                            'defaults' => [
                                'controller' => 'AppBase\Controller\Account',
                                'action'     => 'reset-password',
                            ],
                        ],
                    ],
                    'delete' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => 'delete[/]',
                            'defaults' => [
                                'controller' => 'AppBase\Controller\Account',
                                'action'     => 'delete',
                            ],
                        ],
                    ],
                    // this overwrites the appbase/account/settings
                    'settings' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => 'settings[/]',
                            'defaults' => [
                                'action' => 'settings',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="service_manager">
    'service_manager' => [
        'factories' => [
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="slm_queue">
    'slm_queue' => [
        'job_manager' => [
            'factories' => [],
        ],
        'worker_strategies' => [
            'queues' => [
                'jobs' => [
                    'SlmQueue\Strategy\MaxRunsStrategy' => ['max_runs' => 100],
                ],
            ],
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="user_manager">
    'user_manager' => [
        'post_login_route' => 'account',

        // the password rating can be individually configured for each
        // application, everything above WEAK (OK, GOOD, GREAT) is considered
        // valid
        'password_strength_thresholds' => [
            'ok'   => 19,
            'good' => 22,
        ],
    ],
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="view_manager">
    'view_manager' => [
        'layout'              => 'layout/layout', // this is also set by default
        'template_path_stack' => [
            __DIR__.'/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
// </editor-fold>
];
