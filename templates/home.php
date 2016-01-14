<?php get_template_part('template-parts/home/video'); ?>
<section class="main-section">
    <header class="page-header">
        <h1 class="page-title"><?php echo get_theme_mod('info_heading'); ?></h1>
        <h2 class="page-subtitle"><?php echo get_theme_mod('info_subheading'); ?></h2>
    </header>
    <div class="page-max">
        <div class="split-container">
            <div class="split featured-articles">
                <?php get_template_part('template-parts/home/featured-articles');?>
            </div>
            <div class="split front-calendar">
                <?php get_template_part('template-parts/home/calendar');?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/home/home-before-footer'); ?>