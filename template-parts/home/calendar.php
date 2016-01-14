<?php 

$cal = new WP_Query(array(
    'post_type' => 'kalender',
    'posts_per_page' => 6,
    'meta_key' => 'start_date',
    'orderby' => 'meta_value',
    'order' => 'ASC',
));

if($cal->have_posts()) : while($cal->have_posts()) : $cal->the_post();

get_template_part('template-parts/common/event');

endwhile; endif; wp_reset_postdata();