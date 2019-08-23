<?php

function getImages() {
    $images = getAssocResult("SELECT * FROM goods ORDER BY views DESC");
    return $images;
}

function getImage($id) {
    $id = (int)$id;
    $sql = "SELECT * FROM goods WHERE id = {$id}";
    $img = getAssocResult($sql);
    $result = [];
    if(isset($img[0])){
        if (is_null($img[0]['views'])) {
            updateDb("UPDATE goods SET views = 1 WHERE id = {$id}");
        } else {
            updateDb("UPDATE goods SET views = views + 1 WHERE id = {$id}");
        }
        $result = $img[0];
    }
        return $result;
}

function render($page, $params = [], $navig = [])
{
    return renderTempate("layout", ['navig' => renderTempate('menu', $navig), 'content' => renderTempate($page, $params)]);
}


function renderTempate($page, $params = [])
{
    ob_start();

    extract($params);

    $filename = TEMPLATES_DIR . $page . ".php";

    if (file_exists($filename)) {
        include $filename;
    } else {
        echo "Page not found 404";
    }


    return ob_get_clean();
}
