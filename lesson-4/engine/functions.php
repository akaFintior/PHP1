<?php

function render($page, $params = [])
{
    return renderTempate("layout", ['menu' => renderTempate('menu', $main_menu), 'content' => renderTempate($page, $params)]);
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
