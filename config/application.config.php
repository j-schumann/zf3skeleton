<?php
// _ModuleName_
return [
    // This should be an array of module namespaces used in the application.
    'modules' => [
        'Zend\Session',
        'Zend\Mail',
        'Zend\Cache',
        'Zend\Paginator',
        'Zend\InputFilter', // important or validator messages aren't translated
        'Zend\Filter',
        'Zend\Hydrator',
        'Zend\Validator',
        'Zend\Navigation',
        'Zend\Serializer',
        'Zend\Log',
        'Zend\I18n',
        'Zend\Mvc\I18n',
        'Zend\Mvc\Plugin\Identity',
        'Zend\Mvc\Console',
        'Zend\Form',
        'Zend\Mvc\Plugin\FlashMessenger',
        'Zend\Router',
        'AssetManager',
        'DoctrineModule',
        'DoctrineORMModule',
        'BjyAuthorize',
        'Vrok',
        'AppBase',
        'SlmQueue',
        'SlmQueueDoctrine',
        'TranslationModule',
        'SupervisorControl',
        '_ModuleName_',
    ],

    // These are various options for the listeners attached to the ModuleManager
    'module_listener_options' => [
        // This should be an array of paths in which modules reside.
        // If a string key is provided, the listener will consider that a module
        // namespace, the value of that key the specific path to that module's
        // Module class.
        'module_paths' => [
            dirname(__DIR__).DIRECTORY_SEPARATOR.'module',
            dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor',
        ],

        // An array of paths from which to glob configuration files after
        // modules are loaded. These effectively override configuration
        // provided by modules themselves. Paths may use GLOB_BRACE notation.
        'config_glob_paths' => [
            dirname(__DIR__).DIRECTORY_SEPARATOR.'config/autoload/{,*.}{global,local}.php',
        ],

        // Whether or not to enable a configuration cache.
        // If enabled, the merged configuration will be cached and used in
        // subsequent requests.
        //'config_cache_enabled' => $booleanValue,

        // The key used to create the configuration cache file name.
        //'config_cache_key' => $stringKey,

        // Whether or not to enable a module class map cache.
        // If enabled, creates a module class map cache which will be used
        // by in future requests, to reduce the autoloading process.
        //'module_map_cache_enabled' => $booleanValue,

        // The key used to create the class map cache file name.
        //'module_map_cache_key' => $stringKey,

        // The path in which to cache merged configuration.
        //'cache_dir' => $stringPath,

        // Whether or not to enable modules dependency checking.
        // Enabled by default, prevents usage of modules that depend on other modules
        // that weren't loaded.
        // 'check_dependencies' => true,
    ],
];
