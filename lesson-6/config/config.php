<?php
define("TEMPLATES_DIR", $_SERVER['DOCUMENT_ROOT'] . "/../view/");
define("IMAGES_DIR_SMALL", "/gallery_img/small/");
define("IMAGES_DIR_BIG", "/gallery_img/big/");

define('HOST', 'localhost');
define('USER', 'shop');
define('PASS', '123456');
define('DB', 'shop');


require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/functions.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/gallery.php";
