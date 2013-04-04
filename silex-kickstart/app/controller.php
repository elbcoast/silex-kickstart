<?php

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
})->bind('home');


$app->get('/hello/{name}', function ($name) use ($app) {
    return $app['twig']->render('hello.html.twig', array(
            'name' => $name,
    ));
})->bind('hello');