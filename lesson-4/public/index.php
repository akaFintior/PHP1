<?php

//require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";
include_once __DIR__ . "/../config/config.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'main';
}

switch ($page) {
    case 'main':
        $params = ['name' => 'Alex'];
        break;
    case 'catalog':
        $params = ['catalog' => [
            "Спички",
            "Метла",
            "Ведро"
        ]
        ];
        break;
    case 'gallery':
        $params = [
            'images' => getImages()
        ];
        break;
    case 'image':
        $params = [
            'image' =>  getImage($_GET['id'])
        ];
        break;
    case 'apicatalog':
        $params = ['catalog' => [
            "Спички",
            "Метла",
            "Ведро"
        ]
        ];
        echo json_encode($params, JSON_UNESCAPED_UNICODE);
        die();
        break;
}
$navig = ['menu' => [
    '/' => "Главная",
    '/?page=catalog' => "Каталог",
    '/?page=gallery' => "Галерея",
    '/?page=apicatalog' => "Api-test-catalog"]
];
echo render($page, $params, $navig);
