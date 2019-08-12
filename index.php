<?php

$title = "Главная страница - страница обо мне";
$h1 = "Информация обо мне";
$year = 2019;

$content = file_get_contents("site.tmpl");

$content = str_replace("{{TITLE}}",$title,$content);
$content = str_replace("{{H1}}",$h1,$content);
$content = str_replace("{{YEAR}}",$year,$content);

echo $content;