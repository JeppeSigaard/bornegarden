<?php 

function footer_if_set($item,$before = null,$after = null){
    if (get_theme_mod($item)) {
        return $before . _e(get_theme_mod($item)) . $after;
    }
}

?>
  
<div class="footer-legal">
   <p>
       <?php echo footer_if_set('info_name','','<br>'); ?>
       <?php echo footer_if_set('info_address','','<br>'); ?>
       <?php echo footer_if_set('info_post','',' '); ?>
       <?php echo footer_if_set('info_city','','<br'); ?>
    </p>
    <p>
        Telefon: <a href="tel:<?php echo get_theme_mod('info_telefon') ?>"><?php echo get_theme_mod('info_telefon') ?></a><br/>
        Email: <a href="tel:<?php echo get_theme_mod('info_email') ?>"><?php echo get_theme_mod('info_email') ?></a>
    </p>
    <?php get_template_part('template-parts/footer/footer-menu');  ?> 
</div>