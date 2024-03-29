<?php

function getOneGood($id) {
    $id = (int)$id;
    $sql = "SELECT * FROM goods WHERE id = {$id}";

    $result = getAssocResult($sql)[0];

    return $result;
}

function getAllGoods() {
    $sql = "SELECT * FROM goods WHERE 1";
    $result = getAssocResult($sql);
    return $result;
}

function addToBasket(&$params, $session_id, $action, $id) {
    if ($action == "buy") {
        $id = (int)$id;
        $sql = "INSERT INTO basket (id_session, id_good) VALUES ('{$session_id}', '{$id}')";
        $result = executeQuery($sql);
        $params['message'] = "added to basket";
        return $result;
    }
}
function getItemsFromBasket($session_id) {
    $sql = "SELECT basket.id as basket_id, goods.id as goods_id, goods.name as name, goods.price as price FROM basket, goods WHERE basket.id_good=goods.id AND id_session='{$session_id}'";
    $result = getAssocResult($sql);
    return $result;
}

