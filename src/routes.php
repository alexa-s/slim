<?php
// Routes

$app->get('/', function () {
    global $twig;

    $dir    = 'images/homepage/';
    $array_files = scandir($dir);
    unset($array_files[0]);
    unset($array_files[1]);
    // Render index view
    return $twig->render('index.phtml', array('contents' => $array_files));
})->setName('home');


$app->get('/auto', function () {
    global $twig;

    $dir    = 'images/auto/';
    $array_files = scandir($dir);
    unset($array_files[0]);
    unset($array_files[1]);

    return $twig->render('auto.phtml', array('contents' => $array_files));
})->setName('auto');

$app->get('/fashion', function () {
    global $twig;

    return $twig->render('fashion.phtml');
})->setName('fashion');

$app->get('/about', function () {
    global $twig;

    return $twig->render('about.phtml');
})->setName('about');