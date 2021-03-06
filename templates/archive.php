<?php if ('kalender' == get_post_type( get_the_ID() ) ) :?>
<section class="page-content" style="padding-bottom: 0;">   
        <header class="page-header read-max">
            <h1 class="page-title">Kalender</h1>
        </header>
</section>
<?php endif; ?>
<section class="featured-articles break archive">
    <div class="inner">
        <?php 
        
        if('kalender' === get_post_type( get_the_ID() ) ){
         
        $cal = new WP_Query(array(
            'post_type' => 'kalender',
            'posts_per_page' => -1,
            'meta_key' => 'start_date',
            'orderby' => 'meta_value',
            'order' => 'ASC',
        ));

        if($cal->have_posts()) : while($cal->have_posts()) : $cal->the_post();
        
        $startdate = strtotime(get_post_meta(get_the_ID(),'start_date',true));
        if ($startdate > time()) : 
    
        get_template_part('template-parts/common/event');

        endif; endwhile; endif; wp_reset_postdata(); 
            
        }
        
        else{get_template_part('template-parts/common/post-list');}
        ?>
    </div>
</section>