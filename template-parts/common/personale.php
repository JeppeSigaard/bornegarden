<?php 
$personale = get_post_meta(get_the_ID(),'stue_person',true);
if(is_array($personale) && isset($personale[0]) && $personale[0] !== '') :
?>
<header class="medarbejder-header"><h3>Vi arbejder i <?php the_title(); ?></h3></header>
<?php 

foreach($personale as $person){
    $post = get_post($person);
    setup_postdata($post);
    get_template_part('template-parts/common/featured-article');
    wp_reset_postdata();
}

endif;