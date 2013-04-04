<?php
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\SymfonyBridgesServiceProvider;
use FF\ServiceProvider\LessServiceProvider;


// Register Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views',
));

$app->register(new UrlGeneratorServiceProvider());


// Register FF Silex Less service provider
$app->register(new LessServiceProvider(), array(
        'less.sources'     => array(__DIR__.'/../src/less/style.less'), // specify one or serveral .less files
        'less.target'      => __DIR__.'/../../web/css/style.css', // specify .css target file
        'less.target_mode' => 0775, // Optional
));

$app['debug'] = true;
