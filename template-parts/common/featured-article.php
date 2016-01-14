<a <?php post_class('featured-article'); ?> href="<?php the_permalink(); ?>">
    <div class="inner">
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'featured' ); ?>
        <div class="featured-image" data-bg="<?php echo $image_url[0] ?>"></div>
        <?php the_title('<h3 class="featured-title">','</h3>'); ?>
        <div class="spinning-arrow"></div>
    </div>
</a>