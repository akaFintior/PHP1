

<div>
    <b><?=$good['name']?></b><br>
    <img width="150" src="/img/<?=$good['image']?>" alt=""><br>
    <b>Описание:</b><br> <?=$good['description']?><br>
    Цена: <?=$good['price']?><br>
    <form action="/item/buy/<?=$good['id']?>" method=post>
    <input type="submit" value="Купить"><hr></form>
</div>