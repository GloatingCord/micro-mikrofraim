<?php 

namespace app\controllers;

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}!',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('home.html', ['name' => 'Fabien']);