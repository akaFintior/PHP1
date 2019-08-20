<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/lesson-4/config/config.php";

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
            'images' => [
                '/lesson-4/public/gallery_img/small/01.jpg' => '/lesson-4/public/gallery_img/big.01jpg',
                '/lesson-4/public/gallery_img/small/02.jpg' => '/lesson-4/public/gallery_img/big.02jpg',
                '/lesson-4/public/gallery_img/small/03.jpg' => '/lesson-4/public/gallery_img/big.03jpg',
                '/lesson-4/public/gallery_img/small/04.jpg' => '/lesson-4/public/gallery_img/big.04jpg',
                '/lesson-4/public/gallery_img/small/05.jpg' => '/lesson-4/public/gallery_img/big.05jpg',
                '/lesson-4/public/gallery_img/small/06.jpg' => '/lesson-4/public/gallery_img/big.06jpg',
                '/lesson-4/public/gallery_img/small/07.jpg' => '/lesson-4/public/gallery_img/big.07jpg',
                '/lesson-4/public/gallery_img/small/08.jpg' => '/lesson-4/public/gallery_img/big.08jpg',
            ]
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
        '/?page=gallery' => "Галерея",
        '/?page=apicatalog' => "Api-test-catalog"];


echo render($page, $params);
