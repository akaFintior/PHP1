<?php
$menu = ['/lesson-4/public/' => "Главная",
        '/lesson-4/public/?page=catalog' => "Каталог",
        '/lesson-4/public/?page=gallery' => "Галерея",
        '/lesson-4/public/?page=apicatalog' => "Api-test-catalog"];?>
<ul>
<?foreach ($menu as $key => $item): ?>
	<li><a href="<?=$key?>"><?=$item?></a></li>
<?endforeach;?>
</ul>
