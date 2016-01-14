<?php $embed_code = wp_oembed_get( get_theme_mod('smamo_front_video')); if($embed_code) : ?>
<div class="video-wrap">
   <?php echo $embed_code; ?>
</div>
<?php endif; ?>