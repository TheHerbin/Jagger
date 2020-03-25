<?php
/* initialisation des fichiers TWIG */
require_once '../lib/vendor/autoload.php';
require_once '../src/controleur/_controleurs.php';
require_once '../config/routes.php';
$loader = new \Twig\Loader\FilesystemLoader('../src/vue/');
$twig = new \Twig\Environment($loader, []);


$db = connect($config);
$contenu=getPage($db);
$contenu($twig,$db);

?>