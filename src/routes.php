<?php
// Routes

$app->get('/', function () {
    global $twig;
    
    $dir    = 'images/homepage/';
    $array_files = scandir($dir);
    // Render index view
    return $twig->render('index.phtml', array('contents' => $array_files));
});


$app->get('/auto', function () {
    global $twig;

    return $twig->render('auto.phtml');
});