<?php
if (isset($_SERVER['APPLICATION_ENV']) && $_SERVER['APPLICATION_ENV'] === 'development') {
    define('APPLICATION_ENV', 'development');
    error_reporting(E_ALL | E_NOTICE);
    ini_set("display_errors", 1);
}
else {
    define('APPLICATION_ENV', 'production');
    ini_set("display_errors", 0);
}

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(__DIR__);

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Setup composer autoloading
require 'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$errorHandler = new Vrok\Stdlib\ErrorHandler(__DIR__.'/data/logs');

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
