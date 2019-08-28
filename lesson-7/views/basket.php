<h2>Корзина</h2>
<br><br>
<?foreach ($goods as $good): ?>
<div>
    <b><?=$good['name']?></b> price:<?=$good['price']?> <a href="/basket/delete/<?=$good['basket_id']?>">X</a><br>
</div>
<? endforeach; ?>

<form action="/basket/buy/<?=session_id()?>" method="post">
<input type="text" name="name" placeholder="Your Name" value="">
<input type="text" name="phone" placeholder="Your Phone Number" value="">
<input type="submit" name="send" value="Place Your Order">
</form>