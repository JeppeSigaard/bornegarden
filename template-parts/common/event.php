<?php $color = ( '' !== get_post_meta(get_the_ID(),'post_color',true) ) ? get_post_meta(get_the_ID(),'post_color',true) : '#a73636'; ?>
<a <?php post_class('event-pre'); ?> href="<?php the_permalink(); ?>" style="background-color: <?php echo $color; ?>;">
    <div class="event-date"><?php echo strftime('%d. %B',strtotime(get_post_meta(get_the_ID(),'start_date',true))); ?></div>
    <div class="event-time">
        <?php echo date('H.i',strtotime(get_post_meta(get_the_ID(),'start_date',true))); ?> -
        <?php echo date('H.i',strtotime(get_post_meta(get_the_ID(),'end_date',true))); ?>
    </div>
    <div class="event-title"><?php the_title(); ?></div>
    <div class="spinning-arrow"></div>
</a>