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
            updateViews("UPDATE goods SET views = 1 WHERE id = {$id}");
        } else {
            updateViews("UPDATE goods SET views = views + 1 WHERE id = {$id}");
        }
        $result = $img[0];
    }
        return $result;
}

function getAllFeedback($id) {
    $sql = "SELECT * FROM feedback WHERE picture_id = {$id} ORDER BY id DESC ";
    return getAssocResult($sql);
}


function prepareVariables($page, $action, $id) {
    $params = [];
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
                'image' =>  getImage($id),
                'feedback' => getAllFeedback($id)
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
    return $params;
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
