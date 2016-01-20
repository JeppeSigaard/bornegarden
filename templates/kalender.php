<?php 

while(have_posts()) : the_post();
   get_template_part('template-parts/common/content');
endwhile; 

?>

<section class="featured-articles break page-calendar">
        <?php 

        $cal = new WP_Query(array(
            'post_type' => 'kalender',
            'posts_per_page' => -1,
            'meta_key' => 'start_date',
            'orderby' => 'meta_value',
            'order' => 'ASC',
            'post__not_in' => array(get_the_ID()),
        ));

        if($cal->have_posts()) : while($cal->have_posts()) : $cal->the_post();
        
        $startdate = strtotime(get_post_meta(get_the_ID(),'start_date',true));
        if ($startdate > time()) : 
    
        get_template_part('template-parts/common/event');

        endif; endwhile; endif; wp_reset_postdata(); 
        
        ?>
</section>