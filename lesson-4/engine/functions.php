<?php

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
