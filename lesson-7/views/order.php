<? if (is_auth()):?>
Order id: <?=$id?> <br>
<?foreach ($goods as $good): ?>
<div>
    <b><?=$good['name']?></b> price:<?=$good['price']?><br>
</div>
<? endforeach; ?>
<? else:?>
Content closed
<?endif;?>