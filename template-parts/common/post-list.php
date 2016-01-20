<?php 

if ('stue' === get_post_type(get_the_ID() ) ) {
    
    get_template_part('template-parts/common/personale');
}

else{

    $news = new WP_query(array(
        'post_type' => (is_404()) ? 'page': get_post_type(get_the_ID()),
        'posts_per_page' => get_option('posts_per_page'),
        'post__not_in' => array(get_option('page_on_front'), get_the_ID()),
        'orderby' => ('page' === get_post_type(get_the_ID())) ? 'menu_order' : 'post_date',
    ));

    if($news->have_posts()){

        while($news->have_posts()){
            $news->the_post();
            get_template_part('template-parts/common/featured-article');
        } 
        wp_reset_postdata();
    }
    
}