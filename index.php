<?php
/*
1.Список записей из таблицы
2.Просмотр одной записи
*/

//FRONT CONTROOLER


// 1. Общие настройки
//отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ($_SERVER['DOCUMENT_ROOT'] . '/components/Autoload.php');

// 3. Установка соединения с DB
/11

// include_once ($_SERVER['DOCUMENT_ROOT'].'/components/Db.php');
// print_r($_SERVER['DOCUMENT_ROOT'].'/components/Db.php');



// 4. Вызов Router
$router = new Router();
$router->run();

?>