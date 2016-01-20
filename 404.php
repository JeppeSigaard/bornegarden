<?php 
get_header();

get_template_part('template-parts/common/content','before');

?>
<section class="page-content">   
<article <?php post_class('read-max'); ?>>
    <header class="page-header">
        <h1 class="page-title">Siden blev ikke fundet</h1>
        <h2 class="page-subtitle">Fejl 404</h2>
    </header>
    <p>Vi fandt desværre ikke det indhold du ledte efter. Prøv at navigere tilbage til forsiden eller se om du kan finde noget interessant indhold herunder.</p>
</article>
<section class="featured-articles break">
    <div class="inner">
       <?php get_template_part('template-parts/common/post-list');?>
    </div>
</section>
<?php 
get_template_part('template-parts/common/content','after');

get_footer();
?>