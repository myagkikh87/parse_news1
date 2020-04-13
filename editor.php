<?php
require_once('include/include.php');

if (isset($_POST) && $_POST['id'] > 0)
{
    $id = intval($_POST['id']);
    if (!getNews($id)){
        echo 'Новость не существует!';
        die();
//        throw new \Exception('Новость не существует!');
//        Uncaught Exception
    }

    $status = intval($_POST['status']);
        if (!in_array($status,[0,1])){
            echo 'Не верный статус!';
            die();
    }
    $itemsNews = $_POST['item'];
    saveNewsById($itemsNews, $id);

    header('Location: /index.php');
    die();
}

if (!isset($_GET['id'])) {
    echo 'Не указана новость для редактирования!';
    die();
}

$id = intval($_GET['id']);
if (!getNews($id)){
    echo 'Новость не существует!';
    die();
 }

$items = getNews($id);
echo $twig->render('editor.html', ['elements' => $items]);



