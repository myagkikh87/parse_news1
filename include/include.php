<?php
/**
 * Файл с настройками базы данных
 */
require_once('db.php');

/**
 * Файл с функциями
 */
require_once('function.php');

/**
 * Классы для работы с шабломани
 */
require_once 'vendor/autoload.php';
require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem($_SERVER["DOCUMENT_ROOT"].'/templates');
$twig = new Twig_Environment($loader);

