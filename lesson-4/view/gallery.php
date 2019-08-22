<?foreach ($images as $image): ?>
    <a href="/?page=image&id=<?=$image?>"><img src="<?=IMAGES_DIR_SMALL . $image ?>"></a>
<?endforeach;?>