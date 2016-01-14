<?php 

$news = new WP_query(array(
    'post_type' => array('post','page'),
    'posts_per_page' => get_option('posts_per_page',6),
    'meta_key'  => 'show_on_front',
    'meta_value' => '1',
));

if($news->have_posts()){
    
    while($news->have_posts()){
        $news->the_post();
        get_template_part('template-parts/common/featured-article');
    } 
    wp_reset_postdata();
}