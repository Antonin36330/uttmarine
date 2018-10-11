<?php

require_once __DIR__.'/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('view/');
$twig = new Twig_Environment($loader);
echo $twig->render('index.html.twig', array('isHome' =>true,
));