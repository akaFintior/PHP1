<? if (is_auth()):?>
Order id: <?=$id?> <br>
<?foreach ($goods as $good): ?>
<div>
    <b><?=$good['name']?></b> price:<?=$good['price']?><br>
</div>
<? endforeach; ?>
Общая стоимость: <span id="summ"><?=$summ?></span><br>
<? else:?>
Content closed
<?endif;?>