<?php

function showOrders() {
    $sql = "SELECT * FROM orders WHERE 1";
    $result = getAssocResult($sql);
    return $result;
}


function getOrder($session_id) {
    $sql = "SELECT basket.id as basket_id, goods.id as goods_id, goods.name as name, goods.price as price FROM basket, goods WHERE basket.goods_id=goods.id AND session_id='{$session_id}'";
    $result = getAssocResult($sql);
    return $result;
}

function placeOrder($action, $session_id) {
    if ($action == "placeOrder") {
        $db = getDb();
        $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
        $phone = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['phone'])));
        $adres = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['adres'])));
        $sql = "INSERT INTO `orders`(`session_id`,`name`, `phone`,`adres`) VALUES ('{$session_id}','{$name}','{$phone}','{$adres}')";
        $result = executeQuery($sql);
        if (mysqli_affected_rows(getDb()) != 1) return false;
        session_regenerate_id();
        header("Location: /basket/");
        alert("Order received");
        return $result;
    }
}