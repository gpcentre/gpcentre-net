<?php

require('../vendor/autoload.php');

$app = new \Slim\App( require('../gpcentre/config/app.php') );

// Fetch DI Container
$container = $app->getContainer();

// Register Blade View helper
$container['view'] = function ($container) {
    return new \Slim\Views\Blade(
        $container['settings']['renderer']['blade_template_path'],
        $container['settings']['renderer']['blade_cache_path']
    );
};

$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'home');
});

$app->run();
