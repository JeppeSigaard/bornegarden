<footer class="site-footer">
    <?php if (is_home()) { get_template_part('template-parts/home/footer-extend'); } ?>
    <header class="footer-header">
        <h1 class="page-title"><?php echo get_theme_mod('info_heading'); ?></h1>
        <h2 class="page-subtitle"><?php echo get_theme_mod('info_subheading'); ?></h2>
    </header>
</footer>

<?php wp_footer(); ?>
</body>
</html>
