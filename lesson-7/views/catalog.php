
<?foreach ($goods as $good): ?>
<div>
    <a href="/item/<?=$good["id"]?>">
    <b><?=$good['name']?></b><br>
    <img width="150" src="/img/<?=$good['image']?>" alt=""></a><br>
    Цена: <?=$good['price']?><br>
    <form action="/item/buy/<?=$good['id']?>" method=post>
    <input type="submit" value="Купить"><hr></form>
</div>
<? endforeach; ?>
