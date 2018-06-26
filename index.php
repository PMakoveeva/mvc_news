<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 23.06.2018
 * Time: 0:58
 */

// Front Controller


//
//$string = '21-11-2018';
//
//$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//
//$replacement = 'Год $3, месяц $2, день $1';
//
//var_dump( preg_replace($pattern, $replacement, $string));
//
//die;


//echo phpinfo();
//exit();
// Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение файлов системы

define('ROOT', dirname(__FILE__));
//var_dump(ROOT);

require_once (ROOT . '/components/Db.php');
require_once(ROOT . '/components/Router.php');

//Установка соединения с БД

//Вызов роутер

$router = new Router();
$router->run();