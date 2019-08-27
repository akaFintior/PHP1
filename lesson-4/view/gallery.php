<?foreach ($images as $image): ?>
    <a href="/?page=image&id=<?=$image['id']?>"><img src="<?=IMAGES_DIR_SMALL . $image['name'] ?>"></a>
<?endforeach;?>