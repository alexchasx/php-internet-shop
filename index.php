<?php

//FrontController

// 1.Отображение ошибок на время разработки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

// 3.Установка соединения


// 4. Вызов Router
$router = new Router();
$router->run();
echo "Hello";