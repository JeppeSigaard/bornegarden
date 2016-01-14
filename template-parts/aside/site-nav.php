<?php $ct_options = get_option( 'kontaktinfo_options' ); ?>
<nav id="site-nav" class="site-nav">
    <div class="inner">
        <?php get_template_part('template-parts/aside/main-menu'); ?>
       <?php 
            get_template_part('template-parts/aside/tax-widget');
            dynamic_sidebar('default-sidebar'); 
            if (is_single()) { dynamic_sidebar('post-widgets'); }
        ?>
    </div>
</nav>