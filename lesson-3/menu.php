<?php
$menu = ['/' => "Главная",
'/?page=catalog' => "Каталог",
'/?page=apicatalog' => "Api-test-catalog"];?>
<ul>
<?foreach ($menu as $key => $item): ?>
	<li><a href="<?=$key?>"><?=$item?></a></li>
<?endforeach;?>
</ul>