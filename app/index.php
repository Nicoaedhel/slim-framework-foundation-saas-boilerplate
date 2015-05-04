<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'templates.path' => 'views',
));

$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('views/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true  
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

// Import Site configuration
$site_cfg = parse_ini_file('config.ini', TRUE);

// Template Globals
$twig = $app->view()->getEnvironment();
$twig->addGlobal('SITE_NAME', $site_cfg['website']['name']);
$twig->addGlobal('SITE_PATH', $site_cfg['website']['path']);
$twig->addGlobal('SITE_AUTHOR', $site_cfg['website']['author']);

ORM::configure(array(
    'connection_string' => 'mysql:host=localhost;dbname=my_database',
    'username' => 'database_user',
    'password' => 'top_secret'
));

$app->get('/', function () use ($app) {
    $app->render('index.html');
});

$app->run();