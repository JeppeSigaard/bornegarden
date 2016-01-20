<?php $video_src = get_theme_mod('smamo_front_video'); if($video_src) : ?>

<div class="video-wrap">
    <div id="ytplayer" data-src="<?php echo $video_src ?>"></div>
    <div class="video-play" id="video-play"></div>
</div>
<?php endif; ?>