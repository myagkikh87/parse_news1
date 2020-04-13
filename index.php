<?php
require_once('include/include.php');

$news = getAllNews();

echo $twig->render('index.html', ['news' => $news]);

