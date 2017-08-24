<?php
/** Environmental overloading; naming style adopted from laravel */
$envcfg = [];
$env = (isset($_SERVER["APP_ENV"])) ? __DIR__ . '/./.env.' . $_SERVER["APP_ENV"] . '.php' : null;
if ($env && file_exists($env)) {
    /** @noinspection PhpIncludeInspection */
    $envcfg = require($env);
}

return array_replace_recursive([
    // Slim configuration.
    'templates.path' => __DIR__ . '/../views',
    'mode' => 'development',
    'debug' => true,

    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer'            => [
            'blade_template_path' => __DIR__ . '/../views', // String or array of multiple paths
            'blade_cache_path'    => '/tmp', // Mandatory by default, though could probably turn caching off for development
        ],
    ],

], $envcfg);
