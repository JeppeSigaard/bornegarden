<?php if ('medarbejder' === get_post_type(get_the_ID())) : ?>
<div <?php post_class('featured-article'); ?>>
<?php else :  ?>
<a <?php post_class('featured-article'); ?> href="<?php the_permalink(); ?>">
<?php endif;  ?>
    <div class="inner">
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'featured' ); ?>
        <div class="featured-image" data-bg="<?php echo $image_url[0] ?>"></div>
        <?php the_title('<h3 class="featured-title">','</h3>'); ?>
        <div class="spinning-arrow"></div>
    </div>
<?php if ('medarbejder' === get_post_type(get_the_ID())) : ?>
</div>
<?php else :  ?>
</a>
<?php endif;  ?>
