<div id="main">
    <div class="gallery">
    <?foreach ($images as $small => $big): ?>
    <a href="<?=$big?>" class="photo">
    <img src="<?=$small?>" width="150" height="100" /></a>
    <?endforeach;?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("a.photo").fancybox({
            transitionIn: 'elastic',
            transitionOut: 'elastic',
            speedIn: 500,
            sppedOut: 500,
            hideOnOverlayClick: false,
            titlePosition: 'over'
        }); }); </script>