<?php 

while(have_posts()) : the_post();
   get_template_part('template-parts/common/content');
endwhile; 

?>
<section class="featured-articles break">
    <div class="inner">
       <?php get_template_part('template-parts/common/post-list');?>
    </div>
</section>