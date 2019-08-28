<?php

function showOrders() {
    $sql = "SELECT * FROM orders WHERE 1";
    $result = getAssocResult($sql);
    return $result;
}

function placeOrder($action, $session_id) {
    if ($action == "buy") {
        $db = getDb();
        $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
        $phone = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['phone'])));
        $sql = "INSERT INTO `orders`(`session_id`,`name`, `phone`) VALUES ('{$session_id}','{$name}','{$phone}')";
        $result = executeQuery($sql);
        if (mysqli_affected_rows(getDb()) != 1) return false;
        session_regenerate_id();
        return $result;
    }
}


function basketCount($session_id) {
    $sql = "SELECT * FROM basket WHERE id_session='{$session_id}'";
    $result = executeQuery($sql);
    $rowcount = mysqli_num_rows($result);
    return $rowcount;
}