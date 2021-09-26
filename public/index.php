<?php

use app\controllers\HomeController;

require "../vendor/autoload.php";

$url = isset($_SERVER['PATH_INFO']) ? explode('/', $_SERVER['PATH_INFO']) : '/';

dump($url);

