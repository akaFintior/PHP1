<?php

//require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";
include_once __DIR__ . "/../config/config.php";

$url_array = explode("/", $_SERVER['REQUEST_URI']);

$page = "";
$action = "";
$id = "";
if ($url_array[1] == "") {
    $page = 'main';
} else {
    $page = $url_array[1];
    if (!$url_array[2]=="") {
        if (is_numeric($url_array[2])) {
            $id = $url_array[2];
        } else {
            $action = $url_array[2];
            if (is_numeric($url_array[3])) {
                $id = $url_array[3];
            }
        }
    }
}

$params = prepareVariables($page, $action, $id);
$navig = ['menu' => [
    '/' => "Главная",
    'catalog/' => "Каталог",
    'gallery/' => "Галерея",
    'apicatalog/' => "Api-test-catalog"]
];
echo render($page, $params, $navig);
