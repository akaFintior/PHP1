<img src="<?=IMAGES_DIR_BIG . $image['name'] ?>" alt="">
<h5>Views: <?=++$image['views']?></h5>
<h2>Отзывы</h2>

<?=$error?>

<form action="/image/<?=$image['id']?>/add/" method="post">
    Оставьте отзыв: <br>
    <input type="text" name="name" placeholder="Ваше имя"><br>
    <input type="text" name="message" placeholder="Ваш отзыв"><br>
    <input type="submit">
</form>

<?foreach ($feedback as $item): ?>
    <p>
        <b><?=$item['name']?>:</b> <?=$item['feedback']?> <a href="/image/<?=$image['id']?>/edit/<?=$item['id']?>">[править]</a>  <a href="/image/<?=$image['id']?>/delete/<?=$item['id']?>">[x]</a><br>
    </p>
<?endforeach;?>