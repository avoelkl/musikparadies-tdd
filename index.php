<?php

var_dump($_REQUEST);

require_once __DIR__.'/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(__DIR__.'/src/templates');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html',array('message'=>$message));