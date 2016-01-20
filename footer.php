<footer class="site-footer">
    <?php if (is_home()) { get_template_part('template-parts/home/footer-extend'); } ?>
    <header class="footer-header">
        <h1 class="page-title"><?php echo get_theme_mod('info_heading'); ?></h1>
        <h2 class="page-subtitle"><?php echo get_theme_mod('info_subheading'); ?></h2>
    </header>
    <div class="footer-content">
        <div class="inner">
            <nav class="footer-menu">
                <?php get_template_part('template-parts/footer/footer-legal'); ?>
            </nav>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer-widgets');?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
