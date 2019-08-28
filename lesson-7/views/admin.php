<? if (is_auth()):?>
<h1>Оформленные заказы:</h1><br><br>
<?foreach ($orders as $order): ?>
<div>
    <b>Name: <?=$order['name']?></b>, Phone number: <a href="/order/<?=$order['session_id']?>"><?=$order['phone']?></a>, Order id: <?=$order['session_id']?><br>
</div>
<? endforeach; ?>
<? else:?>
Content closed
<?endif;?>