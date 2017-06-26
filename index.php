<?php
/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 22.06.17
 * Time: 13:00
 */

// FRONT CONTROLLER

// 1. Загальні настройки
// Відображення помилок
ini_set('display_errors',1);
error_reporting(E_ALL);

// 2. Підключення файлів системи
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// 3. Установка з'єднання з БД

// 4. Виклик Router
$router = new Router();
$router->run();