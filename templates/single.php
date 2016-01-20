<?php 

while(have_posts()) : the_post();
   get_template_part('template-parts/common/content');
endwhile; 

?>
<section class="featured-articles break">
    <div class="inner">
       <?php 
        
        if('stue' === get_post_type( get_the_ID() ) ) {
            
            get_template_part('template-parts/common/personale');
            
        }
        else{
            
            get_template_part('template-parts/common/post-list');
        
        }
        
        ?>
    </div>
</section>