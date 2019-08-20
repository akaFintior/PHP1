<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";

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
        _log($params, "params");
        break;
        case 'gallery':
        $params = [
            'images' => getImages("/images_dir/small/")
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
$main_menu = ['/' => "Главная",
        '/?page=catalog' => "Каталог",
        '/?page=apicatalog' => "Api-test-catalog"];


echo render($page, $params);

var_dump($_SERVER['DOCUMENT_ROOT']);
