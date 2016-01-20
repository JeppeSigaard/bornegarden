<?php 

if(has_post_thumbnail()) : 
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'widescreen' );
?> 

<section class="page-image" data-bg="<?php echo $image_url[0] ?>"></section>

<?php endif; ?>

<section class="page-content">   
<article <?php post_class('read-max'); ?>>
    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if('kalender' === get_post_type( get_the_ID() ) ) :  ?>
        <h2 class="page-subtitle">
            <?php echo strftime('%d. %B',strtotime(get_post_meta(get_the_ID(),'start_date',true))); ?>
            <?php echo date('H.i',strtotime(get_post_meta(get_the_ID(),'start_date',true))); ?> -
            <?php echo date('H.i',strtotime(get_post_meta(get_the_ID(),'end_date',true))); ?>
        </h2>
        <?php elseif(has_post_subtitle()) : ?>
        <h2 class="page-subtitle"><?php the_post_subtitle(); ?></h2>
        
        <?php endif; ?>
    </header>
    <?php the_content(); ?>
</article>
</section>