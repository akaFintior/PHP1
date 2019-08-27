<?foreach ($images as $image): ?>
    <a href="/image/<?=$image['id']?>"><img src="<?=IMAGES_DIR_SMALL . $image['name'] ?>"></a>
<?endforeach;?>