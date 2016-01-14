<?php 

function render_gallery($array,$name){
    $i = 0;
    ob_start(); 
    ?>
    <div class="front-gallery <?php echo $name ?>">
        <?php   
            foreach($array as $item) : $i ++;
            $size_string = ($i === 3) ? 'front-gallery-wide' : 'front-gallery-tall';
            $image_url = wp_get_attachment_image_src( $item, $size_string );
        ?>
        <div class="gallery-item <?php echo $size_string ?>" data-bg="<?php echo $image_url[0] ?>"></div>
        <?php endforeach; ?> 
    </div>
    <?php return ob_get_clean();
}

$gal_1 = get_post_meta(get_the_ID(),'front_gallery_1',false);

$gal_2 = get_post_meta(get_the_ID(),'front_gallery_2',false);
?>
<section class="home-before-footer">
    
    <?php if ( $gal_1 && is_array($gal_1) ) {  echo render_gallery($gal_1,'gallery-top'); }?>
    
    <?php get_template_part('template-parts/home/front-boxes') ?>
    
    <?php if ( $gal_2 && is_array($gal_2) ) { echo render_gallery($gal_2,'gallery-top'); } ?>

</section>